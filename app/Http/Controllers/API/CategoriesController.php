<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\apiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    use apiResponse;
    
    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $data = Category::with('department')->get();

            return $this->apiResponse(200, 'all categories', null, $data);
        } catch (\Exception $e) {
            return $this->apiResponse(500, 'server error', $e->getMessage());
        }
    }

    /**
     * Store a newly created category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'department_id' => 'required|exists:departments,id'
        ]);

        if ($validation->fails()) {
            return $this->apiResponse(400, 'validation error', $validation->errors());
        }

        try {
            $category = Category::create([
                'name' => $request->name,
                'description' => $request->description,
                'department_id' => $request->department_id
            ]);

            return $this->apiResponse(201, 'category was created successfully', null, $category);
        } catch (\Exception $e) {
            return $this->apiResponse(500, 'server error', $e->getMessage());
        }
    }

    /**
     * Display the specified category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        try {
            $category = Category::with('department')->find($id);
            
            if (!$category) {
                return $this->apiResponse(404, 'category not found');
            }

            return $this->apiResponse(200, 'category details', null, $category);
        } catch (\Exception $e) {
            return $this->apiResponse(500, 'server error', $e->getMessage());
        }
    }

    /**
     * Update the specified category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'department_id' => 'sometimes|required|exists:departments,id'
        ]);

        if ($validation->fails()) {
            return $this->apiResponse(400, 'validation error', $validation->errors());
        }

        try {
            $category = Category::find($id);
            
            if (!$category) {
                return $this->apiResponse(404, 'category not found');
            }

            $category->update($request->only(['name', 'description', 'department_id']));

            return $this->apiResponse(200, 'category updated successfully', null, $category);
        } catch (\Exception $e) {
            return $this->apiResponse(500, 'server error', $e->getMessage());
        }
    }

    /**
     * Remove the specified category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $category = Category::find($id);
            
            if (!$category) {
                return $this->apiResponse(404, 'category not found');
            }

            $category->delete();

            return $this->apiResponse(200, 'category deleted successfully');
        } catch (\Exception $e) {
            return $this->apiResponse(500, 'server error', $e->getMessage());
        }
    }
}
