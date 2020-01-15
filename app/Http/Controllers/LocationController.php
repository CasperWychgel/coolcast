<?php

namespace App\Http\Controllers;

use App\Inventoryproduct;
use App\Locationproduct;
use App\Property;
use Illuminate\Http\Request;
use App\Location;
use Illuminate\Support\Facades\Auth;
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
/*    $locations = Location::where('id', $id)->get();
    dd($locations);
    $userId = Auth::user()->id;
    $locationUsers = $locations->users()->get();
    dd($locationUsers);

    if ($locations->users() != Auth::user) {*/
        return view('locations.show', [
            'locationproducts' => Location::where('id', $id)->with('products')->get(),
            'locations' => Location::where('id', $id)->get(),
        ]);
    }
}
