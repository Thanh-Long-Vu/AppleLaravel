<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers {
//        AuthenticatesUsers::attemptLogin as traitAttemptLogin;
//        AuthenticatesUsers::showLoginForm as traitShowLoginForm;
    }

    public function showLoginForm() {
        return view('auth.login_register');
    }
//    protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo() {
        $role = Auth::user()->role->name_role;
        switch ($role) {
            case 'Admin':
                return '/admin/home';
                break;
            case 'User':
                return '/';
                break;
            default:
                return '/';
                break;
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
