<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductsController;

class ProductsController extends Controller
{
    public function productsIndex(){

    return view("products.products_index");
    }

    
}
