<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('userPage.pages.home');
    }
    public function productype()
    {
        return view('userPage.pages.producttype');
    }
    public function product()
    {
        return view('userPage.pages.product');
    }
    public function checkout()
    {
        return view('userPage.pages.checkout');
    }
    public function cart()
    {
        return view('userPage.pages.cart');
    }
    public function track_your_order(){
        return view('userPage.pages.track_your_order');
    }
    public function NotFound(){
        return view('userPage.pages.page404');
    }
    public function Contact(){
        return view('userPage.pages.contact');
    }
    public function Blog(){
        return view('userPage.pages.blog');
    }
    public function Blogdetail(){
        return view('userPage.pages.blog');
    }
}
