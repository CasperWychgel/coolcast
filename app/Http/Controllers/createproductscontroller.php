<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use App\Location;
use App\Product;
use Illuminate\Support\Facades\DB;

class createproductscontroller extends Controller
{
    public function index()
    {
        return view('products.create', [
            'locations' => Location::all()
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $product = new Product();

        $product->name = \request('name');
        $product->expiration_date = \request('expiration_date');
        $product->location_id = \request('location');

        //dd($product);

        $product->save();
    }
}
