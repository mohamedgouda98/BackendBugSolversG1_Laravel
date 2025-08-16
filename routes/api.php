<?php

use App\Http\Controllers\API\CategoriesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Category CRUD Routes
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoriesController::class, 'index']);        // GET all categories
    Route::post('/', [CategoriesController::class, 'store']);       // Create new category
    Route::get('/{id}', [CategoriesController::class, 'show']);     // GET single category
    Route::put('/{id}', [CategoriesController::class, 'update']);   // Update category
    Route::delete('/{id}', [CategoriesController::class, 'destroy']); // Delete category
});

// Legacy routes for backward compatibility
Route::get('categories', [CategoriesController::class, 'index']);
Route::post('category/create', [CategoriesController::class, 'store']);
