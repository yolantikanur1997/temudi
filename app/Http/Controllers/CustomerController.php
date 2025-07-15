<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
         if ($request->ajax()) {
            $query = DB::table('customers')
                ->where('customers.organization_id', session('organization_id'));

            return datatables($query)
                // ->orderColumn('price', 'products.price $1')
                ->make(true);
        }

        return view('customer.index');
    }

    public function create()
    {
        return view('customer.add');
    }

    public function store(Request $request)
    {  
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'unique:customers,email',
            'phone_number' => 'unique:customers,phone_number',
        ]);

        DB::beginTransaction();

        Customer::create([
            'name' => $request->name,
            'email' => $request->email, 
            'phone_number' => $request->phone_number,
            'notes' => $request->notes,
            'organization_id' => session('organization_id'),
            'created_by' => auth()->user()->id,
            'updated_by' => auth()->user()->id,
            'active' => 1
        ]);

        try {
            DB::commit();
            return redirect('product')->with('success', 'Produk Berhasil di Simpan');
         } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creating product: ' . $e->getMessage());
            return redirect('product')->with('error', 'Produk Gagal di Simpan');
        }
    }

    public function edit(Request $request, Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request,Customer $customer)
    {  
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'unique:customers,email,' . $customer->id,
            'phone_number' => 'unique:customers,phone_number,'.$customer->id,
        ]);

        DB::beginTransaction();

        $customer->update([
            'name' => $request->name,
            'email' => $request->email, 
            'phone_number' => $request->phone_number,
            'notes' => $request->notes,
            'organization_id' => session('organization_id'),
            'updated_by' => auth()->user()->id,
            'active' => $request->active ? 1 : 0,
        ]);

        try {
            DB::commit();
            return redirect('customer')->with('success', 'Pelanggan Berhasil di Simpan');
         } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creating product: ' . $e->getMessage());
            return redirect('customer')->with('error', 'Pelanggan Gagal di Simpan');
        }
    }
}
