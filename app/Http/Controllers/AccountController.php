<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index(Request $request){
        $id = $request->id;
        $user = User::find($id);
        return view('userPage.pages.my-account',compact('user','id'));
    }
    public function update(Request $request,$id)
    {
        $validatedData = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ], [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'address.required' => 'Address is required.',
            'phone.required' => 'Phone is required.',
            'phone.numeric'=>'Phone number is incorrect format.',
            'image.image' => 'Type file not true.'
        ]);
        if($validatedData->fails()){
            return redirect()->back()->withErrors($validatedData);
        }
        $user = User::find($id);
        if($user->avatar != "" && !isset($request->avatar)){
            $user->avatar;
        }else{
            $image = $request->file('avatar');
            $image_ext = $image->getClientOriginalExtension();
            $new_image_name = "uploads/user/avatar/avatar".rand(1,99999).".".$image_ext;
            $destination_path = public_path('/uploads/user/avatar/');
            $image->move($destination_path,$new_image_name);
            $user->avatar = $new_image_name;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();
        return back()->with('success', 'User update successfully.');
    }
    public function updatePassword(Request $request, $id){
        $validatedPassword = Validator::make($request->all(),[
            'pass_old'=>'required|currentPassword',
            'pass_new'=>'required|min:8|max:20',
            'confirm_pass_new'=>'required|same:pass_new'
        ], [
            'pass_old.required'=>'Vui lòng nhập mật khẩu',
            'pass_old.currentPassword'=>'Mật khẩu cũ không chính xác',
            'pass_new.required'=>'Vui lòng nhập mật khẩu',
            'pass_new.min'=>'Mật khẩu phải dài hơn 8 kí tự',
            'pass_new.max'=>'Mật khẩu dài không quá 20 kí tự',
            'confirm_pass_new.required'=>'Vui lòng nhập mật khẩu xác nhận',
            'confirm_pass_new.same'=>'Mật khẩu xác nhận không đúng'
        ]);
        if($validatedPassword->fails()) {
            return redirect()->back()->withErrors($validatedPassword, 'password');
        }
        $user = User::find($id);
        $user->password = Hash::make($request->pass_new);
        $user->save();
        return back()->with('success', 'Password update successfully.');
    }
}