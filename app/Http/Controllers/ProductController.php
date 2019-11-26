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

    public function store(Request $request)
    {
        /* $product = new Product();
        $today = date('Y-m-d H:i:s');
        $expiration_date = request('expiration_date');

        $product->name = request('name');
        $product->expiration_date = date("Y/m/d", strtotime($expiration_date));
        $product->location_id = request('location');

        $validatedData = $request->validate([
            'name' => 'required',
            'expiration_date' => 'required',
        ]);

        $product->save($validatedData);*/
        $today = date('Y-m-d H:i:s');
        $expiration_date = request('expiration_date');

        $invproduct = new Inventoryproduct();

        $invproduct->name = request('name');

        $invproduct->location_id = request('location');

        $invproduct->save();

        if($expiration_date > $today ) {
            return redirect('/')
                ->with('error','Het ingevoerde product is over de datum');
        } else {
            return redirect('/')
                ->with('succes','Uw product is toegevoegd aan de locatie');
        }
    }
}
