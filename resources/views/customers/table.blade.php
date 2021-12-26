<table id="data_table" class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th class="nosort">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $key => $customer)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->created_at->format('Y/m/d') }}</td>
            <td>
                <div class="table-actions">
                    <a href="#"><i class="ik ik-eye"></i></a>
                    <a href="{{ route('customers.edit', $customer->id) }}"><i class="ik ik-edit-2"></i></a>
                    <a href="#" data-toggle="modal" data-target="#delete{{ $key }}"><i class="ik ik-trash-2"></i></a>

                </div>
            </td>
        </tr>
        @include('customers.delete')
        @endforeach
    </tbody>
</table>
