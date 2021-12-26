<form action="{{ route('vehiclesIn.store') }}" class="forms-sample" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputName1">Select Vehicle</label>
                <select name="vehicle_id" class="form-control">
                    <option value="">Select</option>
                    @foreach ($vehicles as $vehicle)
                        <option value="{{ $vehicle->id }}" @if (isset($vehiclesIn))
                            {{ $vehiclesIn->vehicle_id == $vehicle->id ? 'selected' : '' }}
                    @endif>
                    {{ $vehicle->name .' - '. $vehicle->registration_number }}</option>
                    @endforeach
                </select>
                @if (isset($vehiclesIn))
                    <input type="hidden" name="vehiclesIn_id" value="{{ $vehiclesIn->id }}">
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <label for="exampleInputName1">Select Parking Area</label>
            <select name="parking_area" class="form-control">
                @foreach (getParkingareas() as $parking_area)
                    <option value="{{ $parking_area }}" @if (isset($vehiclesIn))
                        {{ $vehiclesIn->parking_area == $parking_area ? 'selected' : '' }}
                @endif>
                {{ $parking_area }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail3">Parking Number</label>
                <input type="text" name="parking_number" value="{{ isset($vehiclesIn) ? $vehiclesIn->parking_number : '' }}"
                    class="form-control" id="exampleInputEmail3" placeholder="Parking Number">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mr-2">Submit</button>
    <button class="btn btn-light">Cancel</button>
</form>
