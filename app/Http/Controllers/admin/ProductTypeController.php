<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index()
    {
        $productType = ProductType::orderBy('id_product_type', 'DESC')->get();
        return view('adminPage.pages.producttype.list',compact('productType'));
    }
    public function create()
    {
        $category = Category::all();
        return view('adminPage.pages.producttype.create',compact('category'));
    }
    public function store(Request $request)
    {
        $image = $request->file('image');
        $image_size = $image->getSize();
        $image_ext = $image->getClientOriginalExtension();
        $new_image_name = "uploads/admin/productype/productype"."thumbail".rand(1,99999).".".$image_ext;
        $destination_path = public_path('/uploads/admin/productype');
        $image->move($destination_path,$new_image_name);
        
        $productType = new ProductType();
        $productType->thumbnail = $new_image_name;
        $productType->name = $request->name;
        $productType->description = $request->description;
        $productType->warranty = $request->warranty;
        $productType->category_id = $request->id_category;
        $productType->active = 1;
        $dataNameCondition = $request->name_fied;
        $dataValuesCondition = $request->value;
        $result = array_combine($dataNameCondition,$dataValuesCondition);
        $productType->data = $result;
        $productType->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $productType = ProductType::find($id); 
        $datalist = $productType->data;
        $category = Category::all();
        return view('adminPage.pages.producttype.edit',compact('productType','category','datalist'));
    }
    public function update(Request $request,$id)
    {
        $productType = ProductType::find($id);
        if($productType->thumbnail == "" ){
            $image_avatar = $request->thumbnail;
            $filename_avatar = $image_avatar->getClientOriginalName();
            $image_avatar->move(public_path('uploads/admin/category'), $filename_avatar);
            $link = 'uploads/admin/category'.$filename_avatar;
            $productType->thumbnail = $link;
        }
        $productType->name = $request->name;
        $productType->description = $request->description;
        $productType->warranty = $request->warranty;
        $productType->category_id = $request->category_id;
        $dataNameCondition = $request->name_fied;
        $dataValuesCondition = $request->value;
        $result = array_combine($dataNameCondition,$dataValuesCondition);
        $productType->data = $result;
        $productType->save();
        return redirect()->back()->with(['notify'=>'success','massage'=>'Update Successfully']);
    }
    public function updateStatus(Request $request)
    {
        $productType = ProductType::findOrFail($request->product_type_id);
        $productType->active = $request->active;
        $productType->save();

    return response()->json(['message' => 'ProductType status updated successfully.']);
    }
    public function delete($id){
        $delete = ProductType::find($id);
        $delete->delete();

        return redirect()->back();
    }
    public function history(){
        $view = ProductType::onlyTrashed()->get();
        return view ('adminPage.pages.producttype.historydelete',compact('view'));
    }
    public function restore($id){
        $restore = ProductType::withTrashed()->find($id);
        $restore->restore();
        return redirect()->back()->with(['notify'=>'success','massage'=>'Khôi phục thành công']);
    }
}
