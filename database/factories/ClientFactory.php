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

        $fakeLogo = UploadedFile::fake()->image('logo.png', 10, 20);
        $logoPath = $fakeLogo->store('images/clients/logos', 'public');

        $fakeImage = UploadedFile::fake()->image('client.png', 100, 100);
        $imagePath = $fakeImage->store('images/clients/image', 'public');
        
        return [
            'name' => fake()->unique()->name,
            'logo' => str_replace('images/clients/logos/','',$logoPath),
            'image' =>str_replace('images/clients/image/','',$imagePath),
            'url' => fake()->unique()->url(),
            'description' => fake()->text(),
        ];
    }
}


