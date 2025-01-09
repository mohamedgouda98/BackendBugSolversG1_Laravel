<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    public function create()
    {
        $departments = Department::get();
        return view('categories.create', compact('departments'));
    }

    public function store(Request $request)
    {
       $request->validate([
           'name' => 'required|min:3|max:10',
           'description' => 'required',
           'department_id' => 'required'
       ]);
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
            'department_id' => $request->department_id
        ]);
        session()->flash('message', 'Category was Created');
        return to_route('categories');
    }

    public function index()
    {
        $categories = Category::with('department')->get();
        return view('categories.index', compact('categories'));
    }

    public function edit($categoryId)
    {
        $category = Category::where('id', $categoryId)->first();
        $departments = Department::get();

        return view('categories.edit', compact('category','departments'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:10',
            'description' => 'required',
            'department_id' => 'required'
        ]);
        $category = Category::where('id', $request->category_id)->first();
        if($category)
        {
            $category->update([
                'name' => $request->name,
                'slug' => $request->slug,
                'description' => $request->description,
                'department_id' => $request->department_id
            ]);

            session()->flash('message', 'Category was updated');
            return to_route('categories');
        }
        return to_route('categories')->withErrors('Category not found');
    }

    public function delete(Request $request)
    {
        $category = Category::where('id', $request->category_id)->first();
        if($category)
        {
            $category->delete();
            session()->flash('message', 'Category was Deleted');
            return to_route('categories');
        }
        return to_route('categories')->withErrors('Category not found');
    }
}
