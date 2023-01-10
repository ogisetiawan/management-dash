<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function loginForm(){
        return view('login/login');
    }

    public function resetPasswordForm(){
        return view('login/reset-password');
    }

    public function checkMail(){
        return view('login/check-mail');
    }

    public function newPasswordForm(){
        return view('login/new-password');
    }
}
