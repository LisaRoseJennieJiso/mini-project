<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
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
<body>
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Facilitator</h1>
        <form action="{{ route('admin.update.facilitator', ['id' => $facilitator->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $facilitator->name }}">
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" class="form-control" id="department" name="department" value="{{ $facilitator->department }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Facilitator</button>
        </form>
    </div>
@endsection

</body>
</html>