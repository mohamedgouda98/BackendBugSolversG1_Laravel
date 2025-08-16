<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all departments or create some if none exist
        $departments = Department::all();
        
        if ($departments->isEmpty()) {
            $departments = Department::factory(3)->create();
        }

        // Sample categories data
        $categories = [
            [
                'name' => 'Electronics',
                'description' => 'Electronic devices and accessories including smartphones, laptops, and gadgets',
            ],
            [
                'name' => 'Clothing',
                'description' => 'Fashion items including shirts, pants, dresses, and accessories',
            ],
            [
                'name' => 'Books',
                'description' => 'Educational and entertainment books in various genres',
            ],
            [
                'name' => 'Home & Garden',
                'description' => 'Furniture, decor, and gardening supplies for your home',
            ],
            [
                'name' => 'Sports & Outdoors',
                'description' => 'Sports equipment and outdoor activity gear',
            ],
            [
                'name' => 'Food & Beverages',
                'description' => 'Groceries, snacks, and drinks for daily consumption',
            ],
        ];

        foreach ($categories as $categoryData) {
            Category::create([
                'name' => $categoryData['name'],
                'description' => $categoryData['description'],
                'department_id' => $departments->random()->id,
            ]);
        }
    }
}
