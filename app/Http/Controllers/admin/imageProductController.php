<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ImagesProduct;
use App\Models\ProductType;
use Illuminate\Http\Request;

class imageProductController extends Controller
{
    public function index()
    {
        $data = ImagesProduct::all();
        return view('adminPage.pages.imageProduct.list',compact('data'));
    }
    public function create()
    {
        $productType = ProductType::get();
        return view('adminPage.pages.imageProduct.create',compact('productType'));
    }
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            //Xử lý upload Ảnh
            $image_array = $request->file('image');
            $array_len = count($image_array);            

            for($i=0;$i<$array_len;$i++)
            {   
                $image_size = $image_array[$i]->getSize();
                $image_ext = $image_array[$i]->getClientOriginalExtension();
                
                $new_image_name = "uploads/admin/imageProduct/".rand(1,99999).".".$image_ext;

                $destination_path = public_path('/uploads/admin/imageProduct');
                $image_array[$i]->move($destination_path,$new_image_name);
                $table = new ImagesProduct;
                $table->img_url= $new_image_name;
                $table->product_type_id = $request->id_product_type;
                $table->save();
                // dd($table->image);

            }                       
            return redirect()->back()->with(['thongbao'=>'success','massage'=>'Thêm ảnh thành công']);
        }
        return redirect()->back();
    }
    public function edit()
    {
        return view('adminPage.pages.imageProduct.edit');
    }
    public function update()
    {
        return view('adminPage.pages.imageProduct.edit');
    }
}