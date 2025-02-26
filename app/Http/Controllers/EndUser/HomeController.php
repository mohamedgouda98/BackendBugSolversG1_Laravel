<?php

namespace App\Http\Controllers\EndUser;

use App\Models\Client;
use App\Models\Slider;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        $clients = Client::get();
        return view('index', compact('sliders','clients'));
    }
}
