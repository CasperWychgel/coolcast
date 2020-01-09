<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Product;
use App\Locationproduct;
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
            'locationproducts' => Locationproduct::all()->sortBy('date',0,false)
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

        foreach ($request->input('product_id') as $product_id) {
            $locationproduct = new Locationproduct();
            $locationproduct->product_id = $product_id;
            $locationproduct->expiration_date = $nowdate->addDays(14);
            $locationproduct->location_id = request('location');
            $locationproduct->save();
        }

        return redirect('locations/'.$locationproduct->location_id.'/show');
    }


    public function edit($id)
    {
        return view('products.edit', [
            'locationproducts' =>Locationproduct::where('id', $id)->get(),
            'locations' => Location::all(),
        ]);
    }

    public function update(Request $request,$id)
    {
        $locationproduct = Locationproduct::find($id);

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
            'locationproducts' => Locationproduct::all()->where('expiration_date', '<=', $checkdate)->sortBy('date',0,false)
        ]);

    }

}
