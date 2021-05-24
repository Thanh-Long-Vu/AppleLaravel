<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $list_blog = Blog::all();
        return view('adminPage.pages.blog.list', compact('list_blog'));
    }

    public function create()
    {
        return view('adminPage.pages.blog.create');
    }

    public function store(BlogRequest $request)
    {
        $image = $request->file('avatar') ?? "";
        $image_ext = $image->getClientOriginalExtension() ?? "";
        $new_image_name = "uploads/admin/blog/"."thumbnail".rand(1,99999).".".$image_ext ?? "";

        $destination_path = public_path('/uploads/admin/blog');
        $image->move($destination_path,$new_image_name);
        $blog = new Blog();
        $blog->title = $request->title ?? "";
        $blog->description = $request->description ?? "";
        $blog->active = $request->active ?? 0;
        $blog->content = $request->content_text ?? "";
        $blog->avatar = $new_image_name ?? "";
        $blog->product_type_id = 1;
        $blog->save();

        return back()->with('success', 'Category Update successfully.');
    }
    public function getEditBlog()
    {
        return view('adminPage.pages.blog.edit');
    }

}
