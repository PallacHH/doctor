<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function create()
    {
        return view('city.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
