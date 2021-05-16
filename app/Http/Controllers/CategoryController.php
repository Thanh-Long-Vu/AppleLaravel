<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Request $request, Category $category)
    {
        $products = $category->products()->active()->paginate(15);
        return view('userPage.pages.categories', compact('products'));
    }
}
