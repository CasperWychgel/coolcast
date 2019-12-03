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

        foreach ($request->input('name') as $name) {
            $invproduct = new Inventoryproduct();
            $invproduct->name = $name;
            $invproduct->expiration_date = $nowdate->addDays(5);
            $invproduct->location_id = request('location');
            $invproduct->save();
        }

        return redirect('locations/'.$invproduct->location_id.'/show');
    }

    public function notification()
    {
       
        $badbydate = Carbon::now()->addDays(3);

        return view('products.notify', [
            'invproducts' => Inventoryproduct::all()->where('expiration_date', '<=', $badbydate)->sortBy('date',0,false)
        ]);
        
    }

}
