<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductController extends Controller
{

/*    public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        //    $products =DB::table('products')->get();
        return view('products.index', [
            'locationproducts' => Product::all()->sortBy('date',0,false)
        ]);
    }

    public function create()
    {
        $user = Auth::user();

        return view('products.create', [
            'locations' => $user->locations()->get(),
            'products' => Product::all()
        ]);
    }


    public function store(Request $request)
    {
        $location_id = request('location');

        foreach ($request->input('product_id') as $product_id) {
            $products = Product::find($product_id);
            $expiration_date = Carbon::now()->addDays($products->expiresafter);
            $locations = Location::where('id', $location_id)->get();
            $products->locations()->attach($locations, ['expiration_date' => $expiration_date]);
        }

        return redirect('locations/'.$location_id.'/show');
    }


    public function edit($id)
    {
        return view('products.edit', [
            'locationproducts' =>Product::where('id', $id)->get(),
            'locations' => Location::all(),
        ]);
    }

    public function update(Request $request,$id)
    {
        $locationproduct = Product::find($id);

        $locationproduct->name = request('name');

        $locationproduct->expiration_date = request('expiration_date');

        $locationproduct->location_id = request('location');

        $locationproduct->save();

        return redirect('/home')
            ->with('succes','Uw product is bijgewerkt');
    }

    public function destroy($id)
    {

    }

    public function deleteall(Request $request)
    {
        Locationproduct::whereIn('id', $request->input('product'))->delete();
        return redirect('/');
    }


    public function notify()
    {
        $checkdate = Carbon::now()->addDays(4);

        return view('products.notify', [
            'locationproducts' => Product::all()->where('expiration_date', '<=', $checkdate)->sortBy('date',0,false)
        ]);

    }

}
