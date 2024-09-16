@extends('layout')

@section('content')
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 20px;
            color: #2c3e50;
        }

        h1 {
            color: #34495e;
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }

        h3 {
            color: #2ecc71;
            font-size: 22px;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            color: #34495e;
        }

        a {
            color: #3498db;
            text-decoration: none;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }

        .edit-button, .delete-button {
            margin-right: 10px;
        }

        button {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #c0392b;
        }
    </style>

    <h1>Restaurant List</h1>

    <a href="{{ route('restaurants.create') }}"><h3>Add New Restaurant</h3></a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($restaurants as $restaurant)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $restaurant->name }}</td>
                    <td>{{ $restaurant->location }}</td>
                    <td>
                        <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="edit-button">Edit</a>
                        
                        <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
