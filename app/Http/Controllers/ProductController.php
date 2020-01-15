<?php

namespace App\Http\Controllers;

use App\Copy;
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
        return view('products.index', [
            'copylocations' => DB::table('locations')
                ->leftJoin('copy_location','locations.id','=','copy_location.location_id')
                ->leftJoin('copies','copies.id','=','copy_location.copy_id')
                ->leftJoin('copy_product', 'copies.id','=','copy_product.copy_id')
                ->leftJoin('products','products.id','=','copy_product.product_id')
                ->get()
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
            $product = Product::where('id', $product_id)->first();
            //reken exp date uit
//
            $expdate = Carbon::now()->addDays($product->expiresafter);
            //maak nieuwe copy aan
            $copy = new Copy;
            $copy->expiration_date = $expdate;
            $copy->save();
            $copy_id = $copy->id;
            $productid = $product->id;
            //vul koppel tabel
            $products = Product::find($product_id);
            $copy2 = Copy::where('id', $copy_id)->first();
            $locations = Location::where('id', $location_id)->get();
            $locid = $request->input('location');
            $copy->products()->attach([
                1 => ['copy_id' => $copy_id],
                1 => ['product_id' => $product_id]
            ]);

            $copy->locations()->attach([
                1 => ['copy_id' => $copy_id],
                1 => ['location_id' => $location_id]

            ]);


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
        $copy = Copy::where('id','=', $id)->get()->first();
        $copy_id = $copy->id;

        $location_id = request('location');
        DB::table('copy_location')
            ->where('copy_id', $copy_id)
            ->update(['location_id' => $location_id]);

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
            'copylocations' => DB::table('locations')
                ->leftJoin('copy_location','locations.id','=','copy_location.location_id')
                ->leftJoin('copies','copies.id','=','copy_location.copy_id')
                ->leftJoin('copy_product', 'copies.id','=','copy_product.copy_id')
                ->leftJoin('products','products.id','=','copy_product.product_id')
                ->where('expiration_date', '<=', $checkdate)->get()
        ]);

    }

}
