<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightsController extends Controller
{
    public function index()
    {
        $data=Flight::all();
        return view('Flights',['data'=>$data]);
    }
}
