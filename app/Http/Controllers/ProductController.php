<?php

namespace App\Http\Controllers;

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
            'products' => Product::all()
        ]);
    }

    public function create()
    {
        return view('products.create', [
            'locations' => Location::all()
        ]);
    }

/*    public function create()
    {
        return view('products.create');
    }*/

    public function store()
    {
        $product = new Product();
        $today = date('Y-m-d H:i:s');
        $expiration_date = request('expiration_date');

        $product->name = request('name');
        $product->expiration_date = date("Y/m/d", strtotime($expiration_date));
        $product->location_id = request('location');
        $product->save();

        if($expiration_date > $today ) {
            return redirect('/')
                ->with('error','Het ingevoerde product is over de datum');
        } else {
            return redirect('/');
        }
    }
}
