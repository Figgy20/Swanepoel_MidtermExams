<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProductController extends Controller
{
    public function getProducts()
    {   
        $products = array(
            'product1' => 'Steelheart',
            'product2' => 'Hunger Games',
            'product3' => 'Hunger Games: Catching Fire',
            'product4' => 'Hunger Games: Mockingjay'
        );

        return view('welcome', ['products' => $products]);
    }
}
