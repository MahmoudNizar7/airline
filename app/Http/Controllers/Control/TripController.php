<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;
use App\Models\Control\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('control.trips.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Trip $trip)
    {
        //
    }


    public function edit(Trip $trip)
    {
        //
    }


    public function update(Request $request, Trip $trip)
    {
        //
    }


    public function destroy(Trip $trip)
    {
        //
    }
}
