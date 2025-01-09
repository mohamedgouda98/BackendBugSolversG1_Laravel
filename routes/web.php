<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
Route::get('student',[\App\Http\Controllers\StudentsController::class,'index'])->name('student');

Route::get('/', function(){

    return view('welcome');
});

Route::get('categories', [CategoriesController::class, 'index'])->name('categories');
Route::get('categories/create', [CategoriesController::class, 'create'])->name('categories.create');
Route::post('categories/store',[CategoriesController::class,'store'])->name('categories.store');
Route::post('categories/delete', [CategoriesController::class,'delete'])->name('categories.delete');
Route::get('categories/edit/{categoryId}', [CategoriesController::class,'edit'])->name('categories.edit');
Route::post('categories/update', [CategoriesController::class,'update'])->name('categories.update');


Route::get('posts',[\App\Http\Controllers\PostsController::class,'index']);
Route::get('tokens',[\App\Http\Controllers\PostsController::class,'tokens']);
