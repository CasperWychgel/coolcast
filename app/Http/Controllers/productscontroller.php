<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class productscontroller extends Controller
{
    public function show($product)
    {
        $product = \DB::table('products');
    }
}
