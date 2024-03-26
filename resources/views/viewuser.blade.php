@extends('layout')

@section('title')
View New User
@endsection

@section('content')

        <table class="table table-bordered table-striped">
            {{-- @foreach ($data as $id => $user ) --}}
                <tr><td><b>Name</b></td><td>{{ $users->name }}</td></tr>
                <tr><td><b>Email</b></td><td>{{ $users->email }}</td></tr>
                <tr><td><b>City</b></td><td>{{ $users->city }}</td></tr>
                <tr><td><b>Age</b></td><td>{{ $users->age }}</td></tr>
            {{-- @endforeach --}}
        </table>
        <a href="{{ route ('user.index') }}" class="btn btn-success btn-sm mb-3" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Back</a>

@endsection