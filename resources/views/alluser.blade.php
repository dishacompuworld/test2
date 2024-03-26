@extends('layout')

@section('title')
View All Users Data
@endsection

@section('content')
<a href="{{ route ('user.create') }}" class="btn btn-success btn-sm mb-3" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Add New User</a>
        <a href="showcity" class="btn btn-success btn-sm mb-3" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Show Cities</a>
<table class="table table-bordered table-striped">
    <tr><th>Id</th><th>Name</th><th>E-Mail</th><th>City</th><th>Age</th><th>Show</th><th>Delete</th><th>Update</th></tr>
    @foreach ($users as $user )
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->age }}</td>
            <td><a href="{{ route('user.show', $user->id) }}" class="btn btn-primary btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Show</a></td>
            <td>
                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="btn btn-danger btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Delete</button>
                </form>
                </td>
            <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Update</a></td>
        </tr>
    @endforeach
</table>
<div class="mt-5">{{ $users->links('pagination::bootstrap-5') }}</div>
@endsection