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
        $red = Carbon::now();
        $orange = Carbon::now()->addDays(5);
        //    $products =DB::table('products')->get();
        return view('products.index', [
            'invproducts' => Inventoryproduct::all()->sortBy("expiration_date"),
            "red" => $red,
            "orange" => $orange
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
            $invproduct->expiration_date = $nowdate->addDays(14);
            $invproduct->location_id = request('location');
            $invproduct->save();
        }

        return redirect('locations/'.$invproduct->location_id.'/show');
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

    public function deleteall(Request $request)
    {
        Inventoryproduct::whereIn('id', $request->input('product'))->delete();
        return redirect('/');
    }


    public function notify()
    {
        $red = Carbon::now();
        $orange = Carbon::now()->addDays(5);
        $checkdate = Carbon::now()->addDays(4);

        return view('products.notify', [
            'invproducts' => Inventoryproduct::all()->where('expiration_date', '<=', $checkdate)->sortBy('expiration_date'),
            "red" => $red,
            "orange" => $orange

        ]);

    }

    public function orderby()
    {
        return view('products.notify', [
            'invproducts' => Inventoryproduct::all()->sortBy("expiration_date")
        ]);
    }

}
