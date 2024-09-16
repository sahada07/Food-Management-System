<!-- resources/views/restaurants/edit.blade.php -->

@extends('layout')

@section('content')
<h1>Edit Restaurant</h1>

<form method="POST" action="{{ route('restaurants.update', $restaurant->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $restaurant->name }}" required>
    </div>
    <div class="form-group">
        <label for="location">Location:</label>
        <input type="text" name="location" id="location" class="form-control" value="{{ $restaurant->location }}" required>
    </div>
    <button type="submit" class="btn">Update</button>
</form>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }

    h1 {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-size: 16px;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    .btn {
        background-color: #28a745;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .btn:hover {
        background-color: #218838;
    }
</style>
@endsection
