<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleIn;
use App\Http\Requests\StoreVehicleInRequest;
use App\Http\Requests\UpdateVehicleInRequest;

class VehicleInController extends Controller
{

    public function index()
    {
        return view('vehicles_in.index',
        [
            'vehiclesIn' => VehicleIn::with(['vehicle:id,name,registration_number', 'user:id,name'])->where('status', 0)->get(),
            'vehiclesIn_History' => VehicleIn::with(['vehicle:id,name,registration_number', 'user:id,name'])->where('status', 1)->get()
        ]);
    }

    public function create()
    {
        return view('vehicles_in.create',['vehicles' => Vehicle::get(['id','name', 'registration_number'])]);
    }

    public function store(StoreVehicleInRequest $request)
    {
        VehicleIn::updateOrCreate(['id' => $request->vehiclesIn_id], $request->all());

        return redirect()->route('vehiclesIn.index')->with('success', 'Vehicle Entered Successfully!!');
    }

    public function show(VehicleIn $vehiclesIn)
    {
        return view('vehicles_in.show',compact('vehicleIn'), ['vehicles' => Vehicle::get(['id','name', 'registration_number'])]);
    }

    public function edit(VehicleIn $vehiclesIn)
    {
        return view('vehicles_in.edit', compact('vehiclesIn'), ['vehicles' => Vehicle::get(['id','name', 'registration_number'])]);
    }

    public function update(UpdateVehicleInRequest $request, VehicleIn $vehiclesIn)
    {
        //
    }

    public function destroy(VehicleIn $vehiclesIn)
    {
        $vehiclesIn->delete();
        return redirect()->route('vehiclesIn.index')->with('success', 'Vehicle In Deleted Successfully!!');
    }
}
