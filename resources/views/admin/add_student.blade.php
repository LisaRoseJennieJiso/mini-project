@extends('layouts.app')

@section('content')
        <style>
body {
    background-color: #caa78b;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 30px;
    background-color: #e9c9ae;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

.form-control {
    width: 100%;
    border-radius: 10px;
    border: 1px solid #ced4da;
    padding: 10px;
}

.btn {
    display: block;
    width: 100%;
    padding: 10px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 4px;
    background-color: #3e8e41;
    color: white;
    border: none;
}

.btn:hover {
    background-color: #367a39;
}

.text-danger {
    font-size: 14px;
    margin-top: 5px;
}
        </style>
         <div class="container">
        <h1>Add Student</h1>

        <form method="POST" action="{{ route('admin.store.student') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="text" name="year" id="year" class="form-control" value="{{ old('year') }}">
                @error('year')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="course">Course</label>
                <input type="text" name="course" id="course" class="form-control" value="{{ old('course') }}">
                @error('course')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="section">Section</label>
                <input type="text" name="section" id="section" class="form-control" value="{{ old('section') }}">
                @error('section')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">
                @error('username')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control" value="{{ old('password') }}">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Add Student</button>
        </form>
    </div>
@endsection
