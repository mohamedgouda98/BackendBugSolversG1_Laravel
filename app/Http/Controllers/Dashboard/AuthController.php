<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * 1- function to return login view.
     * 2- function to make login function.
     */
    public function loginPage()
    {
        return view('dashboard.login');
    }


    public function login(Request $request)
    {
        $autKeys = $request->only(['email','password']);

        if(Auth::attempt($autKeys))
        {
            dd('yes');
        }

        return back();
    }
}
