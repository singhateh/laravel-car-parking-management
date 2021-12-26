<table id="data_table" class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Reg #</th>
            <th>Vehicle Name</th>
            <th>Parking Area</th>
            <th>Parking Number</th>
            <th>Created At</th>
            <th>Created By</th>
            <th class="nosort">Operation</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vehiclesOut as $key => $vehicleOut)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $vehicleOut->vehicleIn->vehicle->registration_number }}</td>
            <td>{{ $vehicleOut->vehicleIn->vehicle->name }}</td>
            <td>{{ $vehicleOut->vehicleIn->parking_area }}</td>
            <td>{{ $vehicleOut->vehicleIn->parking_number }}</td>
            <td>{{ $vehicleOut->created_at->format('Y/m/d H:i A') }}</td>
            <td>{{ $vehicleOut->user->name }}</td>
            <td>
                <div class="table-actions">
                    <a href="#"><i class="ik ik-eye"></i></a>
                    <a href="{{ route('vehiclesOut.edit', $vehicleOut->id) }}"><i class="ik ik-edit-2"></i></a>
                    <a href="#" onclick=" confirm('Are you sure you want to delete this?');
                    document.getElementById('delete-data').submit();"><i class="ik ik-trash-2"></i></a>

                     <form id="delete-data" action="{{ route('vehiclesOut.destroy', $vehicleOut->id) }}" method="POST" class="d-none">
                        @method('Delete')
                        @csrf
                    </form>
                </div>
            </td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
