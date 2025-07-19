<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Organization;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Services\DocumentNumberService;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TransactionController extends Controller
{

    protected $documentNumberService;

    public function __construct(DocumentNumberService $documentNumberService)
    {
        $this->documentNumberService = $documentNumberService;
    }

    public function index(){
        dd('Oke');
    }
    
    public function create(){

            $today = Carbon::now()->toDateString();
            $lastInvoice = Transaction::whereDate('created_at', $today)
                                  ->where('organization_id', session('organization_id'))
                                  ->latest('id') 
                                  ->first();

            

            $lastRunningNumber = $lastInvoice ?
                (int) substr($lastInvoice->doc_num, -4) : // Ambil 4 digit terakhir dari nomor (0001)
                0; // Jika belum ada, mulai dari 0

            $organizationName = Organization::find(session('organization_id'))->name;

            // 2. Buat nomor dokumen baru
            $doc_num = $this->documentNumberService->generate(
                'INV',
                $organizationName,
                '{PREFIX}/{ORGANIZATION}/{YEAR}/{MONTH}/{DAY}/{RUNNING_NUMBER}',
                $lastRunningNumber 
            );

            
        $customers = Customer::where('organization_id', session('organization_id'))->orderByDesc('id')->get();
        $products = Product::where('organization_id', session('organization_id'))->get();
       
        return view('transactions.add',compact('customers','doc_num','products'));
    }

   public function store(Request $request){

        $request->validate([
            'doc_num' => 'required|unique:transactions,doc_num',
            'date' => 'required',
        ], [
            'doc_num.required' => 'Nomor Transaksi wajib diisi.',
            'doc_num.unique'   => 'Nomor Transaksi sudah digunakan.',
            'date.required'    => 'Tanggal wajib diisi.',
        ]);

        if ($request->customer_option === 'existing') {
            $request->validate([
                'customer_id' => 'required'
            ], [
                'customer_id.required' => 'Pelanggan wajib dipilih jika menggunakan data pelanggan lama.'
            ]);
        } else {
            $request->validate([
                'new_customer_name' => 'required'
            ], [
                'new_customer_name.required' => 'Nama pelanggan baru wajib diisi jika membuat pelanggan baru.'
            ]);
        }

        DB::beginTransaction();

        try{

        $user_id = Auth::id();
        
        if($request->customer_option === 'existing'){
            $customer = Customer::find($request->customer_id);
        }else{
            $customer = Customer::create([
                'organization_id' => session('organization_id'),
                'name' => $request->new_customer_name,
                'email' => $request->new_customer_email,
                'phone_number' => $request->new_customer_phone,
                'active' => 1,
                'address' => $request->new_customer_address,
                'created_by' => $user_id,
                'updated_by' => $user_id,
            ]);
        }

        $transaction_header = Transaction::create([
            'doc_num' => $request->doc_num,
            'customer_id' => $customer->id,
            'date' => $request->date,
            'notes' => $request->notes,
            'organization_id' => session('organization_id'),
            'discount_type' => $request->discount_type,
            'discount_value' => $request->discount,
            'total_discount' => $request->total_discount,
            'subtotal_amount' => $request->subtotal_amount,
            'total_amount' => $request->total_amount,
            'status' => 'pending',
            'created_by' => $user_id,
            'updated_by' => $user_id,
        ]);

        if($request->product_id){
            foreach($request->product_id as $index => $product_id){
                $transaction_detail =  TransactionDetail::create([
                    'transaction_id' => $transaction_header->id, 
                    'product_id'     => $product_id,
                    'price'          => (int) str_replace('.', '', $request->unit_price[$index]),
                    'qty'            => $request->quantity[$index],
                    'sub_total'      => (int) str_replace('.', '', $request->sub_total[$index]),
                ]);
            }
        }

        DB::commit();

        if($request->save_action === 'save-and-print'){

            $transaction = Transaction::find($transaction_header->id);
            
            return view('transactions.print',compact('transaction'));
            
        }

        return redirect('transaction')->with('success', 'Transaksi Berhasil di Simpan');
        }catch(Exception $e){
            Log::info($e);
            return back()->with('error', $e->getMessage());
        }
   }


}
