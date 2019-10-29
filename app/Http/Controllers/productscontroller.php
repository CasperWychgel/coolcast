<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class productscontroller extends Controller
{
    public function show($name)
    {
        $product = \DB::table('products')->where('name',$name)->first();

        dd
    }
}
