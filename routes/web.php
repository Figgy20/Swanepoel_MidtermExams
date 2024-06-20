<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    echo "chat is this real";
    return view('welcome');
});


 
Route::get('/', [ProductController::class, 'getProducts']);
