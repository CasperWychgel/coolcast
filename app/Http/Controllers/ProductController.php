<?php

namespace App\Http\Controllers;

use App\Inventoryproduct;
use App\Property;
use Illuminate\Http\Request;
use App\Location;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        //    $products =DB::table('products')->get();
        return view('products.index', [
            'invproducts' => Inventoryproduct::all()->sortBy('date',0,false)
        ]);
    }

    public function create()
    {
        return view('products.create', [
            'locations' => Location::all(),
            'products' => Product::all()
        ]);
    }

/*    public function create()
    {
        return view('products.create');
    }*/

    public function store()
    {
        $invproduct = new Inventoryproduct();

        $invproduct->name = request('name');

        $invproduct->location_id = request('location');

        $invproduct->save();

        return redirect('/');
    }
}
