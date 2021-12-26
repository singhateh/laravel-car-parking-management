<table id="data_table" class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created By</th>
            <th>Created At</th>
            <th class="nosort">Operation</th>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $key => $category)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->user->name }}</td>
            <td>{{ $category->created_at->format('Y/m/d') }}</td>
            <td>
                <div class="table-actions">
                    {{-- <a href="#"><i class="ik ik-eye"></i></a> --}}
                    <a href="{{ route('categories.edit', $category->cat_id) }}"><i class="ik ik-edit-2"></i></a>
                    <a href="#" data-toggle="modal" data-target="#delete{{ $key }}"><i class="ik ik-trash-2"></i></a>
                </div>
            </td>
            <td></td>
        </tr>
        @include('categories.delete')
        @endforeach
    </tbody>
</table>
