<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
       $request->validate([
           'name' => 'required|min:3|max:10',
           'description' => 'required'
       ]);
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug
        ]);
        session()->flash('message', 'Category was Created');
        return to_route('categories');
    }

    public function index()
    {
        $categories = Category::get();
        return view('categories.index', compact('categories'));
    }

    public function edit($categoryId)
    {
        $category = Category::where('id', $categoryId)->first();
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:10',
            'description' => 'required'
        ]);
        $category = Category::where('id', $request->category_id)->first();
        if($category)
        {
            $category->update([
                'name' => $request->name,
                'slug' => $request->slug,
                'description' => $request->description
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
