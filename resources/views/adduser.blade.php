@extends('layout')

@section('title')
Add User Data
@endsection

@section('content')
<form action="{{ route('user.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-lable">Name</label>
        <input type="text" value="{{ old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror">
        <span class="text-danger"> @error('name') {{ $message }} @enderror </span> 
    </div>
    <div class="mb-3">
        <label class="form-lable">E-mail</label>
        <input type="text" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror">
        <span class="text-danger"> @error('email') {{ $message }} @enderror </span> 
    </div>
    <div class="mb-3">
        <label class="form-lable">Password</label>
        <input type="text" value="{{ old('password') }}" name="password" class="form-control @error('password') is-invalid @enderror">
        <span class="text-danger"> @error('password') {{ $message }} @enderror </span> 
    </div>
    <div class="mb-3">
        <label class="form-lable">City</label>
        <input type="text" value="{{ old('city') }}" name="city" class="form-control @error('city') is-invalid @enderror">
        <span class="text-danger"> @error('city') {{ $message }} @enderror </span> 
    </div>
    <div class="mb-3">
        <label class="form-lable">Age</label>
        <input type="text" value="{{ old('age') }}" name="age" class="form-control @error('age') is-invalid @enderror">
        <span class="text-danger"> @error('age') {{ $message }} @enderror </span> 
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
