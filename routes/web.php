<?php


use App\Http\Controllers\Dashboard\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dashboard','as' => 'dashboard.'],function(){

    Route::get('sliders', function(){
        return view('dashboard.sliders.create');
    });

    Route::get('login', [AuthController::class,'loginPage'])->name('loginPage');
    Route::post('login', [AuthController::class,'login'])->name('login');
});



