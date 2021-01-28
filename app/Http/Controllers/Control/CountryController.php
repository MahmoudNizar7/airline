<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;
use App\Models\Control\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('control/countries/create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Country $country)
    {
        //
    }


    public function edit(Country $country)
    {
        //
    }


    public function update(Request $request, Country $country)
    {
        //
    }


    public function destroy(Country $country)
    {
        //
    }
}
