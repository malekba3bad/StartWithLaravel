<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Http\Requests\CreateFlightRequest;


class FlightsController extends Controller
{
    public function index()
    {
        $data = Flight::withTrashed()->orderBy('id', 'DESC')->get();
        return view('Flights', ['data' => $data]);
    }

    public function create()
    {
        return view('create_flight');
    }

    public function store(CreateFlightRequest $name)
    {
        // $validate = $name->validate([
        //     'name' => 'required|min:3|max:50'
        // ]);


        $flight = new Flight();
        $flight->name = $name->name;
        $flight->save();
        return redirect()->route('flights');
    }
    public function edit($id, Request $request)
    {
        $data = Flight::find($id);
        return view('edit_flights', ['data' => $data]);
    }

    public function update_flights(Request $request, $id)
    {
        $flight = Flight::find($id);
        $flight->name = $request->name;
        $flight->save();
        return redirect()->route('flights');
    }

    public function delete($id)
    {
        Flight::where('id', '=', $id)->forcedelete();
        return redirect()->route('flights');
    }
    
    public function delete_soft($id)
    {
        Flight::where('id', '=', $id)->delete();
        return redirect()->route('flights');
    }

    public function restore($id)
    {
        Flight::where('id', '=', $id)->restore();
        return redirect()->route('flights');
    }

}
