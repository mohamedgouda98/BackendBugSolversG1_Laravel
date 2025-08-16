<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Department;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryApiTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * Test getting all categories.
     *
     * @return void
     */
    public function test_can_get_all_categories()
    {
        Category::factory()->count(3)->create();

        $response = $this->getJson('/api/categories');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'message',
                'data' => [
                    '*' => ['id', 'name', 'description', 'department_id']
                ]
            ]);
    }

    /**
     * Test creating a new category.
     *
     * @return void
     */
    public function test_can_create_category()
    {
        $department = Department::factory()->create();
        
        $categoryData = [
            'name' => 'Test Category',
            'description' => 'This is a test category description',
            'department_id' => $department->id
        ];

        $response = $this->postJson('/api/categories', $categoryData);

        $response->assertStatus(201)
            ->assertJson([
                'status' => 201,
                'message' => 'category was created successfully'
            ]);

        $this->assertDatabaseHas('categories', [
            'name' => 'Test Category',
            'description' => 'This is a test category description'
        ]);
    }

    /**
     * Test getting a single category.
     *
     * @return void
     */
    public function test_can_get_single_category()
    {
        $category = Category::factory()->create();

        $response = $this->getJson("/api/categories/{$category->id}");

        $response->assertStatus(200)
            ->assertJson([
                'status' => 200,
                'message' => 'category details',
                'data' => [
                    'id' => $category->id,
                    'name' => $category->name,
                    'description' => $category->description
                ]
            ]);
    }

    /**
     * Test updating a category.
     *
     * @return void
     */
    public function test_can_update_category()
    {
        $category = Category::factory()->create();
        $newDepartment = Department::factory()->create();
        
        $updateData = [
            'name' => 'Updated Category Name',
            'description' => 'Updated description',
            'department_id' => $newDepartment->id
        ];

        $response = $this->putJson("/api/categories/{$category->id}", $updateData);

        $response->assertStatus(200)
            ->assertJson([
                'status' => 200,
                'message' => 'category updated successfully'
            ]);

        $this->assertDatabaseHas('categories', [
            'id' => $category->id,
            'name' => 'Updated Category Name',
            'description' => 'Updated description'
        ]);
    }

    /**
     * Test deleting a category.
     *
     * @return void
     */
    public function test_can_delete_category()
    {
        $category = Category::factory()->create();

        $response = $this->deleteJson("/api/categories/{$category->id}");

        $response->assertStatus(200)
            ->assertJson([
                'status' => 200,
                'message' => 'category deleted successfully'
            ]);

        $this->assertDatabaseMissing('categories', [
            'id' => $category->id
        ]);
    }

    /**
     * Test validation errors when creating category.
     *
     * @return void
     */
    public function test_validation_errors_when_creating_category()
    {
        $response = $this->postJson('/api/categories', []);

        $response->assertStatus(400)
            ->assertJson([
                'status' => 400,
                'message' => 'validation error'
            ]);
    }

    /**
     * Test 404 when category not found.
     *
     * @return void
     */
    public function test_404_when_category_not_found()
    {
        $response = $this->getJson('/api/categories/999999');

        $response->assertStatus(404)
            ->assertJson([
                'status' => 404,
                'message' => 'category not found'
            ]);
    }
}
