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
    <h1>Edit Student</h1>

    <form method="POST" action="{{ route('admin.update.student', $student->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $student->name }}" required>
        </div>

        <div>
            <label>Year:</label>
            <input type="text" name="year" value="{{ $student->year }}" required>
        </div>

        <div>
            <label>Course:</label>
            <input type="text" name="course" value="{{ $student->course }}" required>
        </div>

        <div>
            <label>Section:</label>
            <input type="text" name="section" value="{{ $student->section }}" required>
        </div>

        <div>
            <label>Username:</label>
            <input type="text" name="username" value="{{ $student->username }}" required>
        </div>

        <button type="submit">Update Student</button>
    </form>
@endsection


</body>
</html>