@extends('layout')

@section('title')
Update User Data
@endsection

@section('content')
<form action="{{ route('user.update', $users->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-lable">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $users->name }}">
    </div>
    <div class="mb-3">
        <label class="form-lable">Email</label>
        <input type="text" name="email" class="form-control" value="{{ $users->email }}">
    </div>
    <div class="mb-3">
        <label class="form-lable">City</label>
        <input type="text" name="city" class="form-control" value="{{ $users->city}}">
        {{-- <select name="city" id="{{ $users->city }}"> --}}
            {{-- @foreach ($data1 as $row)
                <option value="{{ $row->id }}" @php
                    if($data->city == $row->id){ echo 'selected'; }
                @endphp>{{ $row->name }}</option> --}}
            {{-- @endforeach --}}
        </select>
    </div>
    <div class="mb-3">
        <label class="form-lable">Password</label>
        <input type="text" name="password" class="form-control" value="{{ $users->password }}">
    </div>
    <div class="mb-3">
        <label class="form-lable">Age</label>
        <input type="text" name="age" class="form-control" value="{{ $users->age }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection