<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function show(Request $request, ProductType $productType)
    {
        $productTypes = ProductType::where('category_id', $productType->category_id)->get();
        $products = $productType->products;
        return view('userPage.pages.categories', compact('productTypes', 'products'));
    }
}
