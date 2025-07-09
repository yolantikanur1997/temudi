<?php

namespace App\Http\Controllers;

use App\Models\MasterProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class MasterProductController extends Controller
{
    public function index(Request $request) {        
        if($request->ajax()){
            $query = MasterProduct::where('organization_id',session('organization_id'));  
            return datatables($query)
                ->addColumn('created_at', function($row){
                    return $row->created_at->format('d M Y H:i:s');
                })
            ->orderColumn('created_at', 'master_products.created_at $1')
            ->rawColumns(['created_at'])->make(true);
        }

        return view('master_product.index');
    }

public function store(Request $request) {        

    $validator = Validator::make($request->all(), [
        'nama_master_product' => 'required|max:100',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $master_data = MasterProduct::where('name',$request->nama_master_product)->where('organization_id',session('organization_id'))->first();

    if($master_data){
        return redirect('product/category')->with('error', 'Kategori Produk '.$request->nama_master_product. ' Sudah Tersedia');
    }

    DB::beginTransaction();

     try {
       
        MasterProduct::create([
            'name' => $request->nama_master_product,
            'active' => 1,
            'organization_id' => session('organization_id'),
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);

        DB::commit();
        return redirect('product/category')->with('success', 'Kategori Produk Berhasil di Simpan');

    } catch (\Exception $e) {
        Log::info($e);
        DB::rollBack();
        return redirect('product/category')->with('error', 'Kategori Produk Gagal di Simpan');
    }
    }


    public function update(Request $request) {     
        
    
        $validator = Validator::make($request->all(), [
            'nama_master_product_edit' => 'required|max:100',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $master_data = MasterProduct::where('name',$request->nama_master_product_edit)->where('organization_id',session('organization_id'))->whereNot('id',$request->id_master_product)->first();
    
        if($master_data){
            return redirect('product/category')->with('error', 'Kategori Produk '.$request->nama_master_product_edit. ' Sudah Tersedia');
        }
    
        DB::beginTransaction();
    
         try {

            $master_product_data = MasterProduct::where('id',$request->id_master_product)->first();
           
            $master_product_data->update([
                'name' => $request->nama_master_product_edit,
                'active' => $request->active ? 1 : 0,                
                'updated_by' => Auth::user()->id,
            ]);
    
            DB::commit();
            return redirect('product/category')->with('success', 'Kategori Produk Berhasil di Edit');
    
        } catch (\Exception $e) {
            Log::info($e);
            DB::rollBack();
            return redirect('product/category')->with('error', 'Kategori Produk Gagal di Edit');
        }
    }
    
}

