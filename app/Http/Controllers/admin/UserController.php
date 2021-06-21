<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        $listUser = User::where('role_id','=',3)->orderBy('updated_at','desc')->get(); 
        return view('adminPage.pages.user.list',compact('listUser'));
    }
    public function coAdmin(){
        
        $listCoAdmin = User::where('role_id','=',2)->orderBy('updated_at','desc')->get(); 
        return view('adminPage.pages.user.list',compact('listCoAdmin'));
    }
}
