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

        $invproduct->expiration_date = $nowdate->addDays(14);

        $invproduct->location_id = request('location');

        $invproduct->save();

        if($invproduct->expiration_date < $nowdate) {
            return redirect('/home')
                ->with('error','Het ingevoerde product is over de datum');
        } else {
            return redirect('/home')
                ->with('succes','Uw product is toegevoegd aan de locatie');
        }
    }

    public function edit($id)
    {
        return view('products.edit', [
            'invproducts' =>Inventoryproduct::where('id', $id)->get(),
            'locations' => Location::all(),
        ]);
    }

    public function update(Request $request,$id)
    {
        $invproduct = Inventoryproduct::find($id);

        $invproduct->name = request('name');

        $invproduct->expiration_date = request('expiration_date');

        $invproduct->location_id = request('location');

        $invproduct->save();

        return redirect('/home')
            ->with('succes','Uw product is bijgewerkt');
    }

    public function destroy($id)
    {

    }



    public function notify()
    {
        $checkDate = Carbon::now()->addDays(4);

        return view('products.notify', [
            'invproducts' => Inventoryproduct::all()->where('expiration_date', '<=', $checkDate)
        ]);
    }
}
