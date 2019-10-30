<?php

namespace App\Http\Controllers;

use App\Properties;
use Illuminate\Http\Request;
use App\Locations;
use App\products;
use Illuminate\Support\Facades\DB;

class createproductscontroller extends Controller
{
    public function index()
    {
        return view('products.create', [
            'locations' => Locations::all()
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        return request()->all();
    }
}
