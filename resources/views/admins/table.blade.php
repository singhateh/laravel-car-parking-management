<table id="data_table" class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th class="nosort">Avatar</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th class="nosort">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $key => $user)
        <tr>
            <td>{{ $key+1 }}</td>
            <td><img src="{{ getUserAvatar($user->avatar) }}" class="table-user-thumb" alt=""></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->format('Y/m/d') }}</td>
            <td>
                <div class="table-actions">
                    <a href="#"><i class="ik ik-eye"></i></a>
                    <a href="#"><i class="ik ik-edit-2"></i></a>
                    <a href="#" data-toggle="modal" data-target="#delete{{ $key }}"><i class="ik ik-trash-2"></i></a>
                </div>
            </td>
        </tr>
        @include('admins.delete')
        @endforeach
    </tbody>
</table>
