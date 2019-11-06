<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use App\Location;
use App\Product;
use Illuminate\Support\Facades\DB;

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

    public function store() {
        $location = new Location();
        $location->name = request('name');
        $location->save();
        return redirect('locations');
    }

    public function show($id) {
        return view('locations.show', [
            'products' => Product::where('location_id', $id)->get()
        ]);
    }
}
