<?php

namespace App\Http\Controllers;

use App\Inventoryproduct;
use App\Property;
use Illuminate\Http\Request;
use App\Location;
use App\Product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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


    public function store(Request $request)
    {
        $nowdate = Carbon::now();

        $invproduct = new Inventoryproduct();

        $invproduct->name = request('name');

        $invproduct->expiration_date = $nowdate->addDays(5);

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
