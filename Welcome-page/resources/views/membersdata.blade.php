<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<a href={{route('members.create')}} class="btn btn-success"><span>Add New Member</span></a><br>
<table class="table">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Full Name</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
      
        @foreach ($users as $user)
        
            <tr>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{ $user->full_name_with_prefix }}</td>
                <td>{{ $user->gender }}</td>
            </tr>
        @endforeach
    </tbody>
</table>