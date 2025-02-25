<?php


<<<<<<< HEAD
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\SlidersController;
use App\Http\Controllers\EndUser\HomeController;
use Illuminate\Support\Facades\Route;
=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EndUser\HomeController;
use App\Http\Controllers\EndUser\UserController;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\SlidersController;
>>>>>>> master

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

<<<<<<< HEAD
=======


        Route::get('clients',[ClientController::class,'index'])->name('clients.index');
        Route::get('clients/show/{client}',[ClientController::class,'show'])->name('clients.show');
        
        Route::get('clients/create',[ClientController::class,'create'])->name('client.create');
        Route::post('clients',[ClientController::class,'store'])->name('client.store');

        Route::get('clients/edit/{client}',[ClientController::class,'edit'])->name('client.edit');
        Route::put('clients/{client}',[ClientController::class,'update'])->name('client.update');

        Route::get('clients/delete/{client}',[ClientController::class,'destroy'])->name('client.delete');

>>>>>>> master
    });



});




Route::group([],function(){

    Route::get('/', [HomeController::class,'index'])->name('index');

});



