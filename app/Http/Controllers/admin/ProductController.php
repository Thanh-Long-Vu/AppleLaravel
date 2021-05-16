<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Warehouse;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::orderBy('id_product','DESC')->get();
        return view('adminPage.pages.product.list',compact('data'));
    }
    public function create($id)
    {
        $wareHouse = WareHouse::find($id);
        $ProductType = ProductType::get();
        return view('adminPage.pages.product.create',compact('wareHouse','ProductType'));
    }
    public function store(Request $request,$id)
    {
        $image = $request->file('image');
        $image_size = $image->getSize();
        $image_ext = $image->getClientOriginalExtension();
        $new_image_name = "uploads/admin/product/product"."thumbnail".rand(1,99999).".".$image_ext;
        $destination_path = public_path('/uploads/admin/product');
        $image->move($destination_path,$new_image_name);

        $product = new Product();
        $product->warehouse_id = $id;
        $product->thumbnail = $new_image_name;
        $product->price = $request->price_sell;
        $product->discount = $request->discount;
        $product->is_hot = 0;
        $product->product_type_id = $request->id_product_type;
        $product->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $productType = ProductType::all();
        $product = Product::find($id); 
        $idWareHouse = $product->warehouse_id;
        $warehouse = Warehouse::find($idWareHouse);
        return view('adminPage.pages.product.edit',compact('product','warehouse','productType'));
    }
    public function update(Request $request, $id)
    {
        //Update Table Product
        $product = Product::find($id);
        if($product->thumbnail != "" && !isset($request->image)){
            $product->thumbnail;
        }else{
            $image = $request->file('image');
            $image_size = $image->getSize();
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = "uploads/admin/product/product"."thumbnail".rand(1,99999).".".$image_ext;
            $destination_path = public_path('/uploads/admin/product');
            $image->move($destination_path,$new_image_name);
            $product->thumbnail = $new_image_name;
        }
        $product->product_type_id = $request->product_type_id;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->save();
        // dd($product);
        return redirect()->back();
    }
    
    public function updateStatus(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $product->is_hot = $request->is_hot;
        $product->save();

    return response()->json(['message' => 'Product status updated successfully.']);
    }
    public function delete($id){
        $delete = Product::find($id);
        $delete->delete();

        return redirect()->back();
    }
    public function history(){
        $view = Product::onlyTrashed()->get();
        return view ('adminPage.pages.product.historydelete',compact('view'));
    }
    public function restore($id){
        $restore = Product::withTrashed()->find($id);
        $restore->restore();
        return redirect()->back()->with(['notify'=>'success','massage'=>'Khôi phục thành công']);
    }
    public function getCategory($id)
    {
        $producttype = DB::table('product_types')->where("id_category",$id)->pluck("name","id_product_type");
        return response()->json($producttype);
    }
}
