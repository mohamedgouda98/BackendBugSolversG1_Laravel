<?php

use App\Http\Controllers\API\CategoriesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('categories', [CategoriesController::class,'index']);
Route::post('category/create', [CategoriesController::class,'store']);
