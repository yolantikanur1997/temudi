<?php

namespace App\Http\Controllers;

use App\Models\MasterProduct;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PDO;

class ProductController extends Controller
{  
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = DB::table('products')
                ->leftJoin('master_products', 'products.master_product_id', '=', 'master_products.id')
                ->select(
                    'products.*',
                    'master_products.name as type_product'
                )
                ->where('products.organization_id', session('organization_id'));

            return datatables($query)
                ->addColumn('created_at', function ($row) {
                    return Carbon::parse($row->created_at)->format('d M Y H:i:s');
                })
                ->addColumn('price', function ($row) {
                    return $row->price ? 'Rp ' . number_format($row->price, 0, ',', '.') : '0';
                })
                ->orderColumn('price', 'products.price $1')
                ->orderColumn('created_at', 'products.created_at $1')
                ->rawColumns(['created_at'])
                ->make(true);
        }

        return view('product.index');
    }

    public function create()
    {
        $masterProducts = MasterProduct::where('organization_id', session('organization_id'))->get();
        return view('product.add',compact('masterProducts'));
    }

    public function store(Request $request)
    {  
       
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required',
            'type_id' => 'required',
        ]);

        DB::beginTransaction();

        try {

        // Format price to number (remove dot separator)
        $price = str_replace('.', '', $request->price);

        $user_id = auth()->user()->id;

        Product::create([
            'organization_id' => session('organization_id'),
            'name' => $request->name,
            'price' => $price,
            'notes' => $request->notes,
            'master_product_id' => $request->type_id,
            'created_by' => $user_id,
            'updated_by' => $user_id,
            'active' => 1, 
        ]);
            DB::commit();
            return redirect('product')->with('success', 'Produk Berhasil di Simpan');
         } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creating product: ' . $e->getMessage());
            return redirect('product')->with('error', 'Produk Gagal di Simpan');
        }
    }

    public function edit(Request $request, Product $product)
    {
        $masterProducts = MasterProduct::where('organization_id', session('organization_id'))->get();

        return view('product.edit', compact('product', 'masterProducts'));
    }

    public function update(Request $request, Product $product)
    {  

        // dd($product);
       
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required',
            'type_id' => 'required',
        ]);

        DB::beginTransaction();

        try {

        // Format price to number (remove dot separator)
        $price = str_replace('.', '', $request->price);

        $user_id = auth()->user()->id;

        $product->update([
            'organization_id' => session('organization_id'),
            'name' => $request->name,
            'price' => $price,
            'notes' => $request->notes,
            'master_product_id' => $request->type_id,
            'updated_by' => $user_id,
            'active' => $request->active ? 1 : 0, 
        ]);
            DB::commit();
            return redirect('product')->with('success', 'Produk Berhasil di Edit');
         } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creating product: ' . $e->getMessage());
            return redirect('product')->with('error', 'Produk Gagal di Edit');
        }
    }

     
    public function searchProduct(Request $request)
    {
        $organizationId = session('organization_id'); 

        $products = Product::where('organization_id', $organizationId)->where('active', 1)->get();

        return response()->json($products);
    }
}
