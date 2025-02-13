<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SlidersController extends Controller
{

    public function index()
    {
        $sliders = Slider::get();
        return view('dashboard.sliders.index', compact(['sliders']));
    }

    public function create()
    {
        return view('dashboard.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'url_title' => 'required',
        ]);

        Slider::create([
            'image' => "rest.png",
            'title' => $request->title,
            'url' => $request->url,
            'url_title' => $request->url_title
        ]);

        Alert::success('Slider', 'Slider Added');

        return back();

    }

    public function delete($id)
    {
        $slider = Slider::where('id',$id)->first();
        if(!$slider)
        {
            Alert::error('Slider', 'Slider not found');
        }else{
            $slider->delete();

            Alert::success('Slider', 'Slider Deleted');
        }

        return back();
    }

    public function edit($id)
    {
        $slider = Slider::where('id',$id)->first();
        if(!$slider)
        {
            Alert::error('Slider', 'Slider not found');
            return back();
        }

       return view('dashboard.sliders.edit', compact('slider'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
            'url_title' => 'required',
        ]);

        $slider = Slider::where('id',$id)->first();
        if(!$slider)
        {
            Alert::error('Slider', 'Slider not found');
        }else {
            $slider->update([
                'title' => $request->title,
                'url' => $request->url,
                'url_title' => $request->url_title,
            ]);
        }

        return redirect(route('dashboard.sliders.index'));
    }

}
