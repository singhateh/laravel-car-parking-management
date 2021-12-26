<table id="data_table" class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Reg #</th>
            <th>Category</th>
            <th>Customer</th>
            <th>Vehicle Name</th>
            <th>Plat Number</th>
            <th>Status</th>
            <th>Created At</th>
            <th class="nosort">Operation</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vehicles as $key => $vehicle)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $vehicle->registration_number }}</td>
            <td>{{ $vehicle->category->name }}</td>
            <td>{{ $vehicle->customer->name }}</td>
            <td>{{ $vehicle->name }}</td>
            <td>{{ $vehicle->plat_number }}</td>
            <td>{{ $vehicle->status == 1 ? "Active" : "InActive" }}</td>
            <td>{{ $vehicle->created_at->format('Y/m/d') }}</td>
            <td>
                <div class="btn-group table-actions">
                    <a href="#" data-toggle="modal" data-target="#show{{ $key }}"><i class="ik ik-eye"></i></a>
                    <a href="{{ route('vehicles.edit', $vehicle->id) }}"><i class="ik ik-edit-2"></i></a>
                    <a href="#"  data-toggle="modal" data-target="#delete{{ $key }}"><i class="ik ik-trash-2"></i></a>
                </div>
            </td>
            <td></td>
        </tr>
        @include('vehicles.show')
        @include('vehicles.delete')
        @endforeach
    </tbody>
</table>
