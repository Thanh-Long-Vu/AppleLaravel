<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request, Category $category)
    {
        $productTypes = $category->productTypes;
        return view('userPage.pages.categories', compact('productTypes'));
    }
}
