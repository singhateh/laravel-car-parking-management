<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Category;
use App\Models\Customer;

class VehicleController extends Controller
{

    public function index()
    {
       return view('vehicles.index',
       ['vehicles' =>
       Vehicle::with(['customer:id,name', 'user:id,name', 'category:id,name'])->get()]);
    }

    public function create()
    {
        return view('vehicles.create', ['categories' => Category::get(['id','name']),
        'customers' => Customer::get(['id','name'])]);
    }

    public function store(StoreVehicleRequest $request)
    {
      try {
        Vehicle::updateOrCreate(['id' => $request->vehicle_id], $request->except('vehicle_id', 'status') + ['status' => 0]);
        return redirect()->route('vehicles.index')->with('success',  $request->vehicle_id ? 'Vehicle Updated Successfully!!' : 'Vehicle Created Successfully!!');
      } catch (\Throwable $th) {
        return redirect()->route('vehicles.create')->with('error', 'Vehicle Cannot be Create please check the inputs!!');
      }
    }

    public function show(Vehicle $vehicle)
    {
        //
    }

    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'), ['categories' => Category::get(['id','name']),
        'customers' => Customer::get(['id','name'])]);
    }

    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        //
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicles.index')->with('success', 'Vehicle Deleted Successfully!!');

    }
}
