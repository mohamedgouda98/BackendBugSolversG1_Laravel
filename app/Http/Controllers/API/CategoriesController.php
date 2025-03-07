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
    public function index()
    {
        try {
            $data = Category::get();

            return $this->apiResponse(200, 'all categories', null, $data);
        }catch (\Exception $e)
        {
            return $this->apiResponse(500, 'server error');
        }
    }


    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
           'name' => 'required',
           'department_id' => 'required|exists:departments,id'
        ]);

        if($validation->fails())
        {
            return $this->apiResponse(400 , 'validation error', $validation->errors());
        }

        try {
            Category::create([
                'name' => $request->name,
                'department_id' => $request->department_id
            ]);

            return $this->apiResponse(200, 'category was created');
        }catch (\Exception $e)
        {
            return $this->apiResponse(500, 'server error', $e->getMessage());
        }
    }


}
