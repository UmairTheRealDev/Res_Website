@extends('Dashboard\Dash_main')
@section('main-content')

@include('Dashboard\includes\alerts')

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Speciality</th>
            <th>Nationality</th>
            <th>Experience (Years)</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forEach($cheffs as $chef)
        <tr>
            <td>{{ $chef->id }}</td>
            <td>{{ $chef->name }}</td>
            <td>{{ $chef->email }}</td>
            <td>{{ $chef->speciality }}</td>
            <td>{{ $chef->nationality }}</td>
            <td>{{ $chef->experience }}</td>
            <td><img src="{{ asset($chef->image) }}" height="100px" width="100" alt=""></td>
            <td>
                {{-- <a href="{{ route('chefs.edit', $chef->id) }}" class="btn btn-sm btn-warning">Edit</a> --}}
                
            </td>
        </tr>
       
        @endforEach
    </tbody>
</table>
@endsection