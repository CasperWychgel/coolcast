<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productscontroller extends Controller
{
    /**
     * Show a list of all of the application's products.
     *
     * return Response
     */
    public function index()
    {
    //    $products =DB::table('products')->get();
        return view('products.index', [
            'products' => Products::with('properties')->get()
        ]);
    }
}