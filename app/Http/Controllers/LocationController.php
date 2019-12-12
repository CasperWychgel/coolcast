<?php

namespace App\Http\Controllers;

use App\Inventoryproduct;
use App\Property;
use Illuminate\Http\Request;
use App\Location;
use App\Product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LocationController extends Controller
{
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

        $location = Location::create($attributes);

        return redirect('locations/'.$location->id.'/show');
    }

    public function show($id) {
        $red = Carbon::now();
        $orange = Carbon::now()->addDays(5);

        return view('locations.show', [
            'invproducts' =>Inventoryproduct::where('location_id', $id)->get(),
            'locations' =>Location::where('id', $id)->get(),
            "red" => $red,
            "orange" => $orange
        ]);
    }
}