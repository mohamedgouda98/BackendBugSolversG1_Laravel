<?php

use Illuminate\Support\Facades\Route;
Route::get('student',[\App\Http\Controllers\StudentsController::class,'index'])->name('student');

Route::get('/', function(){
    return view('welcome');
});
