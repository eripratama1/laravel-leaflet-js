<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceMapController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return view('places.map', compact('places'));
    }
}
