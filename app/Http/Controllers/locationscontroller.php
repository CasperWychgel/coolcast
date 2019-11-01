<?php

namespace App\Http\Controllers;

use App\Location;

class locationscontroller extends Controller
{
    /**
     * Show a list of all of the application's locations.
     *
     * return Response
     */
    public function index()
    {
        //    $products =DB::table('products')->get();
        return view('products.add', [
            'locations' => Location::all()
        ]);
    }
}
