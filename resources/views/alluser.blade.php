@extends('layout')

@section('title')
All User Data
@endsection

@section('content')
<table class="table table-bordered table-striped">
    <tr><th>Id</th><th>Name</th><th>E-Mail</th><th>City</th><th>Age</th><th>Show</th><th>Delete</th><th>Update</th></tr>
    @foreach ($users as $user )
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->cityname }}</td>
            <td>{{ $user->age }}</td>
            <td><a href="" class="btn btn-primary btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Show</a></td>
            <td><a href="" class="btn btn-danger btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Delete</a></td>
            <td><a href="" class="btn btn-warning btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Update</a></td>
        </tr>
    @endforeach
</table>
@endsection