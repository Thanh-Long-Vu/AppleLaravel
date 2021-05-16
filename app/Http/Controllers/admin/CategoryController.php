<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {        
        $listcategory = Category::all();
        return view('adminPage.pages.category.list',compact('listcategory'));
    }
    public function create()
    {
        return view('adminPage.pages.category.create');
    }
    public function store(Request $request)
    {
        $image = $request->file('image');
        $image_size = $image->getSize();
        $image_ext = $image->getClientOriginalExtension();
        $new_image_name = "uploads/admin/category/category"."thumbail".rand(1,99999).".".$image_ext;

        $destination_path = public_path('/uploads/admin/category');
        $image->move($destination_path,$new_image_name);
        $category = new Category();
        $category->thumbnail = $new_image_name;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->title = $request->title;
        $category->active = 1;
        $category->save();
        return redirect()->back();
    }
    public function edit($id){
        $category = Category::find($id); 
        // dd($category->thumbnail);
        return view('adminPage.pages.category.edit',compact('category'));
    }
    public function update(Request $request,$id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->title = $request->title;
        if($category->thumbnail != "" && !isset($request->image)){
            $category->thumbnail;
        }else{
            $image = $request->file('image');
            $image_size = $image->getSize();
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = "uploads/admin/category/category"."thumbnail".rand(1,99999).".".$image_ext;
            $destination_path = public_path('/uploads/admin/category');
            $image->move($destination_path,$new_image_name);
            $category->thumbnail = $new_image_name;
        }
        $category->save();
        return redirect()->back();
    }
    public function updateStatus(Request $request)
    {
        $productType = Category::findOrFail($request->category_id);
        $productType->active = $request->active;
        $productType->save();

    return response()->json(['message' => 'Category status updated successfully.']);
    }
    
    public function delete($id){
        $deleteCategory = Category::find($id);
        $deleteCategory->delete();

        return redirect()->back();
    }
    public function history(){
        $viewCategory = Category::onlyTrashed()->get();
        return view ('adminPage.pages.category.historydelete',compact('viewCategory'));
    }
    public function restore($id){
        $retoreCategory = Category::withTrashed()->find($id);
        $retoreCategory->restore();
        return redirect()->back()->with(['notify'=>'success','massage'=>'Khôi phục thành công']);
    }
}
