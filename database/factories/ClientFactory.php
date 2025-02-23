<?php

namespace Database\Factories;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $fakeLogo = UploadedFile::fake()->image('logo.png', 100, 40);
        $logoPath = $fakeLogo->store('images/clients/logos', 'public');

        $fakeImage = UploadedFile::fake()->image('client.png', 360, 360);
        $imagePath = $fakeImage->store('images/clients/image', 'public');
        
        return [
            'name' => fake()->unique()->name,
            'logo' => $logoPath,
            'image' => $imagePath,
            'url' => fake()->unique()->url(),
            'description' => fake()->text(),
        ];
    }
}


