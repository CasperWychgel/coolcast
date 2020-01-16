<?php

namespace App\Http\Controllers;

use App\Copy;
use Illuminate\Http\Request;
use App\Location;
use Illuminate\Support\Facades\Auth;
use App\Product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LocationController extends Controller
{

/*    public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index() {
        $user = Auth::user();
        return view('locations.index', [
            'locations' => $user->locations()->get()
        ]);
    }

    public function create() {
        return view('locations.create');
    }

    public function store(Request $request) {

        $user = Auth::user();

        $attributes = $request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        $replace = ['de ', 'het ', 'een ', 'De ', 'Het ', 'Een ', "Mijn ", "mijn "];

        $location = Location::create(str_replace($replace, '', $attributes));
        $location->users()->attach($user);

        return redirect('locations/'.$location->id.'/show');
    }

    public function show($id) {

        $currentLocation = Location::with('users')->where('id', $id)->first();

        $red = Carbon::now();
        $orange = Carbon::now()->addDays(5);

        if (Auth::user()->hasAnyLocations($currentLocation->id)) {
            return view('locations.show', [

            'copylocations' => DB::table('locations')->where('locations.id', $id)
            ->leftJoin('copy_location','locations.id','=','copy_location.location_id')
                ->leftJoin('copies','copies.id','=','copy_location.copy_id')
                ->leftJoin('copy_product', 'copies.id','=','copy_product.copy_id')
                ->leftJoin('products','products.id','=','copy_product.product_id')
            ->get(),

            'locations' => Location::where('id', $id)->get(),

            "red" => $red,
            "orange" => $orange

            ]);
        } else {
            return redirect('home');
        }
        
    }
}
