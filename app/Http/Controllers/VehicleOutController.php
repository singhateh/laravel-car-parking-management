<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleOut;
use App\Http\Requests\StoreVehicleOutRequest;
use App\Http\Requests\UpdateVehicleOutRequest;
use App\Models\VehicleIn;

class VehicleOutController extends Controller
{

    public function index()
    {
        return view(
            'vehicles_out.index',
            ['vehiclesOut' => VehicleOut::with(['vehicleIn.vehicle:id,name,registration_number', 'user:id,name'])->get()]
        );
    }

    public function create()
    {
        return view('vehicles_out.create', ['vehiclesIn' =>
        VehicleIn::with('vehicle:id,name,registration_number')
            ->where('status', 0)->get(['id', 'vehicle_id'])]);
    }

    public function store(StoreVehicleOutRequest $request)
    {
        VehicleOut::updateOrCreate(['id' => $request->vehiclesOut_id], $request->all());
        VehicleIn::where('id', $request->vehicleIn_id)->update(['status' => 1]);
        return redirect()->route('vehiclesOut.index')->with('success', 'Vehicle Out Successfully!!');
    }

    public function show(VehicleOut $vehiclesOut)
    {
        return view('vehicles_out.show', compact('VehicleOut'), ['vehicles' => Vehicle::get(['id', 'name', 'registration_number'])]);
    }

    public function edit(VehicleOut $vehiclesOut)
    {
        return view('vehicles_out.edit', compact('vehiclesOut'), ['vehicles' => Vehicle::get(['id', 'name', 'registration_number'])]);
    }

    public function update(UpdateVehicleOutRequest $request, VehicleOut $vehiclesOut)
    {
        //
    }

    public function destroy(VehicleOut $vehiclesOut)
    {
        $vehiclesOut->delete();
        return redirect()->route('vehiclesOut.index')->with('success', 'Vehicle Out Deleted Successfully!!');
    }
}
