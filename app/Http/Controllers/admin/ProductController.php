<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\HistoryPrice;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Warehouse;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validatedData = Validator::make($request->all(),[
            'price_sell' => 'required|integer',
            'quantity_sell' => 'required|integer',
            'discount' => 'required|integer|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ], [
            'price_sell.required' => 'Price Sell is required',
            'quantity_sell.required' => 'Quantity Sell is required',
            'discount.required' => 'Description is required',
            'image.required' => 'Image is required',
            'image.image' => 'Type file not true'
        ]);
        if($validatedData->fails()){
            return back()->withErrors($validatedData);
        }
        $image = $request->file('image');
        $image_size = $image->getSize();
        $image_ext = $image->getClientOriginalExtension();
        $new_image_name = "uploads/admin/product/product"."thumbnail".rand(1,99999).".".$image_ext;
        $destination_path = public_path('/uploads/admin/product');
        $image->move($destination_path,$new_image_name);

        
        $product = new Product();
        $wareHouse = Warehouse::find($id);
        $historyPrice = new HistoryPrice();
        // $createProduct = $product->save();
        //  history = Model({
        //      histtory_price = createProduct->price,
        //      procut_id= cretaeProdict -> id
        //  })
        //  history->save()
        if($request->quantity_sell <= $wareHouse->quantity){
            $product->warehouse_id = $id;
            $product->thumbnail = $new_image_name;  
            $product->active_quantity += $request->quantity_sell;
            $wareHouse->quantity_sell += $request->quantity_sell;
            $product->active = 1;
            $wareHouse->active = 1;
            $product->price = $request->price_sell;
            $historyPrice->price_history = $request->price_sell;
            $product->discount = $request->discount;
            $product->is_hot = 0;
            $product->product_type_id = $request->id_product_type;
            // dd($product->id_product);
            $wareHouse->save();
            $product->save();
            $historyPrice->product_id = $product->id_product;
            // dd($historyPrice);
            $historyPrice->save();
            return redirect()->back()->with('success', 'Product update successfully.');
        }
        else {
            return redirect()->back()->with('error','Quantity sell > Quantity warehouse. Please enter quantity true');
        }
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
        $validatedData = Validator::make($request->all(),[
            'price_sell' => 'required|integer|min:100',
            'quantity_sell' => 'required|integer',
            'discount' => 'required',
        ], [
            'price_sell.required' => 'Price Sell is required',
            'quantity_sell.required' => 'Quantity Sell is required',
            'discount.required' => 'Description is required',
        ]);
        if($validatedData->fails()){
            return back()->withErrors($validatedData);
        }
        //Update Table Product
        $product = Product::find($id);
        $wareHouse = Warehouse::find($product->warehouse_id);
        if(!empty($product->thumbnail) && empty($request->image)){
            $product->thumbnail;
        }else{
            $image = $request->file('image');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = "uploads/admin/product/product"."thumbnail".rand(1,99999).".".$image_ext;
            $destination_path = public_path('/uploads/admin/product');
            $image->move($destination_path,$new_image_name);
            $product->thumbnail = $new_image_name;
        }
        $historyPrice = new HistoryPrice();
        if($request->quantity_sell <= $wareHouse->quantity - $wareHouse->quantity_sell){
            $product->active_quantity += $request->quantity_sell;
            $wareHouse->quantity_sell += $request->quantity_sell;
            $product->product_type_id = $request->product_type_id;
            $product->price = $request->price_sell;
            $historyPrice->price_history = $request->price_sell;
            $historyPrice->product_id = $id;
            $product->discount = $request->discount;
            $product->save();
            $wareHouse->save();
            $historyPrice->save();
            return redirect('admin/product')->with('success', 'Product update successfully.');
        }else {
            return redirect()->back()->with('error','Quantity sell > Quantity warehouse. Please enter quantity true');
        }
        
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
    public function historyPrice(Request $request)
    {
        $historyPrice = HistoryPrice::where('product_id','=',$request->product_id)->get();
        // dd($historyPrice);
        // return response()->json();
        return $historyPrice;
    }
}
