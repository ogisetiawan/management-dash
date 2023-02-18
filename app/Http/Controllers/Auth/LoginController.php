<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login/login');
    }

    public function validateLogin(Request $request)
    {

        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        $credential = array(
            'chEmail'  => $request->get('email'),
            'chPassword' => $request->get('password')
        );

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            if(Auth::user()->chUserType === 'User'){
                return redirect()->intended('user/dashboard/summary');
            }
            return redirect()->intended('admin/master_data/country');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showResetForm()
    {
        return view('login/reset-password');
    }

    public function showMailForm()
    {
        return view('login/check-mail');
    }

    public function showNewPasswordForm()
    {
        return view('login/new-password');
    }
}
