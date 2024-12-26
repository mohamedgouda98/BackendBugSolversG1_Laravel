<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hazem()
    {
        return view('hazem');
    }

    public function home()
    {
        return view('welcome');
    }
}
