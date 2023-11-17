<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicles;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicles::all();
        return view('vehicles.index', ['vehicles' => $vehicles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehicles = new vehicles();

        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required',
            'automatic' => 'required',
            'fuel' => 'required',
            'license_plate' => 'required',
        ]);

        $vehicles->brand = $request->brand;
        $vehicles->model = $request->model;
        $vehicles->year = $request->year;
        $vehicles->automatic = $request->automatic;
        $vehicles->fuel = $request->fuel;
        $vehicles->license_plate = $request->license_plate;

        $vehicles->save();

        return redirect()->route('vehicles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vehicles = Vehicles::find($id);
        return view('vehicles.edit', ['vehicles' => $vehicles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vehicles = Vehicles::find($id);

        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required',
            'automatic' => 'required',
            'fuel' => 'required',
            'license_plate' => 'required',
        ]);

        $vehicles->brand = $request->brand;
        $vehicles->model = $request->model;
        $vehicles->year = $request->year;
        $vehicles->automatic = $request->automatic;
        $vehicles->fuel = $request->fuel;
        $vehicles->license_plate = $request->license_plate;

        $vehicles->save();

        return redirect()->route('vehicles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Vehicles::destroy($id);
        return redirect()->route('vehicles.index');
    }
}
