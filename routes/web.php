<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home',[MainController::class,'showIndex']); 

Route::get('/array',[MainController::class,'showArray']); 