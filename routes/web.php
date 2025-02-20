<?php


use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\SlidersController;
use App\Http\Controllers\EndUser\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dashboard'],function(){

    Route::get('login', [AuthController::class,'loginPage'])->name('loginPage');
    Route::post('login', [AuthController::class,'login'])->name('login');


    Route::group(['middleware' => 'auth' ,'as' => 'dashboard.'], function(){
        Route::get('sliders', [SlidersController::class,'index'])->name('sliders.index');
        Route::get('sliders/create', [SlidersController::class,'create'])->name('sliders.create');
        Route::post('sliders/store', [SlidersController::class,'store'])->name('sliders.store');
        Route::get('sliders/delete/{id}', [SlidersController::class,'delete'])->name('sliders.delete');
        Route::get('sliders/edit/{id}', [SlidersController::class,'edit'])->name('sliders.edit');
        Route::post('sliders/update/{id}', [SlidersController::class,'update'])->name('sliders.update');

    });



});




Route::group([],function(){

    Route::get('/', [HomeController::class,'index'])->name('index');

});



