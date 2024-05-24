@extends('layouts.app')

@section('content')
<style>
    body {
    background-color: #caa78b;
    font-family: Arial, sans-serif;
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

form {
    display: grid; 
    gap: 15px; 
}

label {
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    border-radius: 5px;
    border: 1px solid #ced4da;
    padding: 10px;
    box-sizing: border-box;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 4px;
    background-color: #3e8e41;
    color: white;
    border: none;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #367a39;
}

</style>
    <div class="container">
        <h1>Add Student</h1>

        <form method="POST" action="{{ route('admin.store.facilitator') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                @error('name')
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

            <button type="submit" class="btn btn-primary">Add Facilitator</button>
        </form>
    </div>
@endsection
