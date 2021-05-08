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
    // public function create()
    // {
    //     return view('adminPage.pages.product.create');
    // }
    // public function store()
    // {
    //     return view('adminPage.pages.product.create');
    // }
    public function edit($id)
    {
        $category = Category::all();
        $productType = ProductType::all();
        $product = Product::find($id); 
        $idWareHouse = $product->warehouse_id;
        $warehouse = Warehouse::find($idWareHouse);
        return view('adminPage.pages.product.edit',compact('product','warehouse','category','productType'));
    }
    public function update(Request $request, $id)
    {
        //Update Table Product
        $product = Product::find($id);
        if($product->thumbnail == "" ){
            $image_avatar = $request->image;
            $filename_avatar = $image_avatar->getClientOriginalName();
            $image_avatar->move(public_path('uploads/admin/product/'), $filename_avatar);
            $link = 'uploads/admin/product/'.$filename_avatar;
            $product->thumbnail = $link;
        }
        $product->product_type_id = $request->producttype;
        $product->color = $request->color;
        $product->price = $request->price;
        $product->memory = $request->memory;
        $product->discount = $request->discount;
        $product->quantity  = $request->quantity ;
        $product->IMEI = $request->IMEI;
        $product->save();
        return redirect()->back();
    }
    public function updateWareHouse(Request $request, $id)
    {
        //Update Table wareHouse
        $product = Product::find($id);
        $wareHouseId = $product->warehouse_id;
        $wareHouse = Warehouse::find($wareHouseId);
        $wareHouse->name = $request->name;
        $wareHouse->IMEI = $request->IMEI_warehouse;
        $wareHouse->warranty = $request->warranty_warehouse;
        $wareHouse->color = $request->color_warehouse;
        $wareHouse->memory = $request->memory_warehouse;
        $wareHouse->price = $request->price_warehouse;
        $wareHouse->quantity = $request->quantity_warehouse;
        $wareHouse->save();
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
