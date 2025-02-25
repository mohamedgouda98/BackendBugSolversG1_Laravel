<?php

namespace App\Http\Controllers\EndUser;

<<<<<<< HEAD
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
=======
use App\Models\Client;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
>>>>>>> master

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
<<<<<<< HEAD
        return view('index', compact('sliders'));
=======
        $clients = Client::get();
        return view('index', compact('sliders','clients'));
>>>>>>> master
    }
}
