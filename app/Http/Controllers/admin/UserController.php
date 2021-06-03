<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $listUser = User::orderBy('updated_at','desc')->get(); 
        $listGuest = Guest::orderBy('updated_at','desc')->get();
        return view('adminPage.pages.user.list',compact('listUser','listGuest'));
    }
}
