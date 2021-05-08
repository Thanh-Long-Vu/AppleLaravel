<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id)
    {
        $requestdata = Warehouse::find($id);
        return view('adminPage.pages.product.list',compact('requestdata'));
    }
    public function create()
    {
        return view('adminPage.pages.product.create');
    }
    public function store()
    {
        return view('adminPage.pages.product.create');
    }
    public function edit()
    {
        return view('adminPage.pages.product.edit');
    }
    public function update()
    {
        return view('adminPage.pages.product.edit');
    }
    
    public function updateStatus(Request $request)
    {
        $product = Product::findOrFail($request->product_type_id);
        $product->active = $request->active;
        $product->save();

    return response()->json(['message' => 'Product status updated successfully.']);
    }
}
