<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Traits\UploaderTrait;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SlidersController extends Controller
{
    use UploaderTrait;
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
            'image' => 'required'
        ]);

        

        $image = $request->file('image');
        $fileName = 'slider_' . time() . '.' . $image->getClientOriginalExtension();
        $this->uploadfile($image, 'images/sliders' ,$fileName);
        Slider::create([
            'image' => $fileName,
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
            
            $oldImage =  'images/sliders/' .$slider->getRawOriginal('image');
            $slider->delete();

            $this->deletefile($oldImage);

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

            if($request->has('image'))
            {

                dd($request->image->getClientOriginalPath());
                
                $image = $request->file('image');
                $fileName = 'slider_' . time() . '.' . $image->getClientOriginalExtension();
                $this->uploadfile($image, 'images/sliders/' ,$fileName, $slider->getRawOriginal('image'));
            }

            $slider->update([
                'title' => $request->title,
                'url' => $request->url,
                'url_title' => $request->url_title,
                'image' => $fileName ?? $slider->image
            ]);
        }

        return redirect(route('dashboard.sliders.index'));
    }

}
