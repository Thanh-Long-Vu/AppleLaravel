<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    public function index(){
        $brand = Brand::orderBy('created_at','desc')->get(); 
        return view('adminPage.pages.brand.list',compact('brand'));
    }
    public function create()
    {
        return view('adminPage.pages.brand.create');
    }
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
            'name' => 'required',
        ], [
            'name.required' => 'Name Category is required',
        ]);
        if($validatedData->fails()){
            return redirect()->back()->withErrors($validatedData);
        }
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->save();
        
        return back()->with('success', 'Add Image successfully.');
    }
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('adminPage.pages.brand.edit',compact('brand'));
    }
    public function update(Request $request,$id)
    {
        $validatedData = Validator::make($request->all(),[
            'name' => 'required',
        ], [
            'name.required' => 'Name brand is required',
        ]);
        if($validatedData->fails()){
            return back()->withErrors($validatedData);
        }
        //Update Table Product
        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->save();
        return redirect('admin/supplier')->with('success', 'brand update successfully.');

    }
}
