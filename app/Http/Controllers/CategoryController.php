<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Request $request, Category $category)
    {
        $productTypes = $category->productTypes;
        return view('userPage.pages.categories', compact('productTypes'));
    }
}
