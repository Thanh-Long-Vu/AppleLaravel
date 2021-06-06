<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Request $request, Category $category)
    {
        $categoryName = $category->name;
        $productTypes = $category->productTypes;

        return view('userPage.pages.category.categories', compact('categoryName','productTypes'));
    }
}
