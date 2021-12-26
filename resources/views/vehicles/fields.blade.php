<form action="{{ route('vehicles.store') }}" class="forms-sample" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail3">Registration Number</label>
                <input type="text" name="registration_number"
                    value="{{ isset($vehicle) ? $vehicle->registration_number : '' }}" class="form-control"
                    id="exampleInputEmail3" readonly placeholder="Registration Number Auto">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputName1">Category</label>
                <select name="category_id" class="form-control">
                    <option value="">Select</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if (isset($vehicle))
                            {{ $vehicle->category_id == $category->id ? 'selected' : '' }}
                    @endif>
                    {{ $category->name }}</option>
                    @endforeach
                </select>
                @if (isset($vehicle))
                    <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputName1">Customer Name</label>
                <select name="customer_id" class="form-control">
                    <option value="">Select</option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}" @if (isset($vehicle))
                            {{ $vehicle->customer_id == $customer->id ? 'selected' : '' }}
                    @endif>
                    {{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Vehicle Name</label>
                <input type="text" name="name" value="{{ isset($vehicle) ? $vehicle->name : '' }}"
                    class="form-control" id="exampleInputEmail3" placeholder="Vehicle Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Vehicle Plat Number</label>
                <input type="text" name="plat_number" value="{{ isset($vehicle) ? $vehicle->plat_number : '' }}"
                    class="form-control" id="exampleInputEmail3" placeholder="Vehicle Plat Number">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail3">Parking Duration</label>
                <input type="number" name="duration" value="{{ isset($vehicle) ? $vehicle->duration : '' }}"
                    class="form-control" id="exampleInputEmail3" placeholder="Parking Duration">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail3">Parking Charges</label>
                <input type="number" min="1" name="packing_charge" value="{{ isset($vehicle) ? $vehicle->packing_charge : '' }}"
                    class="form-control" id="exampleInputEmail3" placeholder="Parking Charges">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail3">Vehicle Status</label>
                <select name="status" class="form-control">
                    @foreach (getVehicleStatus() as $key =>  $status)
                        <option value="{{ $key }}" @if (isset($vehicle))
                            {{ $vehicle->status == $key ? 'selected' : '' }}
                    @endif>
                    {{ $status }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <button class="btn btn-light">Cancel</button>
</form>
