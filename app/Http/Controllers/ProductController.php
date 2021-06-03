<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Request $request, Product $product)
    {
        $colors = ProductType::LIST_COLOR;
        return view('userPage.pages.product', compact('product', 'colors'));
    }
}
