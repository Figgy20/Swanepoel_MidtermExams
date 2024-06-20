<?php

use Illuminate\Support\Facades\Route;
use App\Http\ProductController;

Route::get('/', function () {
    return view('welcome');
});


 
Route::get('/products', [ProductController::class, 'getProducts']);
