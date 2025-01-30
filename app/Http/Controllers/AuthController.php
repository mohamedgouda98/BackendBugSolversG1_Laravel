<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('Auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        if(Auth::attempt($request->only('email','password')))
        {
            return to_route('categories.index');
        }

        return redirect()->back()->withErrors('user not found');
    }


    public function logout()
    {
        Auth::logout();

        session()->flash('message', 'User Logout');
        return to_route('login');
    }
}
