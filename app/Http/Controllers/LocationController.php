<?php

namespace App\Http\Controllers;

use App\Copy;
use Illuminate\Http\Request;
use App\Location;
use App\Product;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{

/*    public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index() {
        return view('locations.index', [
            'locations' => Location::all()
        ]);
    }

    public function create() {
        return view('locations.create');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'name' => ['required', 'string', 'unique:locations,name', 'max:255']
        ]);

        $replace = ['de ', 'het ', 'een ', 'De ', 'Het ', 'Een ', "Mijn ", "mijn "];

        $location = Location::create(str_replace($replace, '', $attributes));

        return redirect('locations/'.$location->id.'/show');
    }

    public function show($id) {

        return view('locations.show', [

            'copylocations' => DB::table('locations')->where('locations.id', $id)
            ->leftJoin('copy_location','locations.id','=','copy_location.location_id')
                ->leftJoin('copies','copies.id','=','copy_location.copy_id')
                ->leftJoin('copy_product', 'copies.id','=','copy_product.copy_id')
                ->leftJoin('products','products.id','=','copy_product.product_id')
            ->get(),

            'locations' => Location::where('id', $id)->get()
        ]);
    }
}
