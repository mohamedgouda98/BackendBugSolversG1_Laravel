<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Traits\UploaderTrait;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    use UploaderTrait;
    public function index()
    {
        $clients = Client::get();

        return view('dashboard.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('dashboard.clients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'description' => 'required|string',
            'url' => 'required|string|url',
            'logo' => 'required|image',
            'image' => 'required|image',
        ]);

        $logo = $request->file('logo');
        $logoName = 'client_logo_' . time() . '_' . $logo->getClientOriginalName();
        $this->uploadfile($logo, 'images/clients/logos', $logoName);

        $image = $request->file('image');
        $imageName = 'client_image_' . time() . '_' . $image->getClientOriginalName();
        $this->uploadfile($image, 'images/clients/image', $imageName);

        $validated = array_merge($validated, [
            'image' =>  $imageName,
            'logo' =>  $logoName,
        ]);


        Client::create($validated);

        return redirect(route('dashboard.clients.index'));
    }

    public function show(Client $client)
    {
        return view('dashboard.clients.show', compact('client'));
    }

    public function destroy(Client $client)
    {
        $oldImage =  $client->getRawOriginal('image');
        $this->deleteFile($oldImage);

        $oldLogo =  $client->getRawOriginal('logo');
        $this->deleteFile($oldLogo);

        $client->delete();

        Alert::success('Client', $client->name . ' Deleted');
        return back();
    }

    public function edit(Client $client, Request $request)
    {
        return view('dashboard.clients.edit', compact('client'));
    }

    public function update(Client $client, Request $request)
    {
        // dd($client->image);

        $validated = $request->validate([
            'name' => 'string|min:3',
            'description' => 'string',
            'url' => 'string|url',
            'logo' => 'image',
            'image' => 'image',
        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'client_image_' . time() . '_' . $image->getClientOriginalName();

            $this->uploadfile($image,
                              'images/clients/image/',
                              $imageName,
                              $client->getRawOriginal('image'));
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = 'client_logo_' . time() . '_' . $logo->getClientOriginalName();

            $this->uploadfile($logo,
                              'images/clients/logos/',
                              $logoName,
                              $client->getRawOriginal('logo'));
        }
        $validated= array_merge($validated,['image' =>  $imageName??$client->getRawOriginal('image'),
                                                    'logo' =>  $logoName??$client->getRawOriginal('logo'),]);

        $client->update($validated);




        
        Alert::success('Client',$client->name.' updated');

        return redirect(route('dashboard.clients.index'));
    }
}
