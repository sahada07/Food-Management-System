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
            font-size: 32px;
            margin-bottom: 20px;
        }

        .menu-list {
            list-style-type: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .menu-list li {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .menu-list li:hover {
            background-color: #f1f3f6;
            transform: translateY(-5px);
        }

        .menu-name {
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
        }

        .menu-price {
            font-size: 16px;
            color: #e74c3c;
            font-weight: 500;
            margin-left: 10px;
        }

        .restaurant-name {
            display: block;
            font-size: 14px;
            color: #95a5a6;
            margin-top: 5px;
        }

        .menu-actions {
            margin-top: 15px;
        }

        .menu-actions a,
        .menu-actions button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        .menu-actions a:hover,
        .menu-actions button:hover {
            background-color: #2980b9;
        }

        .menu-actions form {
            display: inline;
        }

        .add-menu {
            background-color: #2ecc71;
            color: #fff;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            margin-bottom: 30px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .add-menu:hover {
            background-color: #27ae60;
        }
    </style>

    <h1>Menu List</h1>
    <a href="{{ route('menus.create') }}" class="add-menu">Add New menu</a>

    <ul class="menu-list">
        @foreach ($menus as $menu)
            <li>
                <span class="menu-name">{{ $menu->name }}</span>
                <span class="menu-price">${{ $menu->price }}</span>
                <span class="restaurant-name">Restaurant: {{ $menu->restaurant->name }}</span>
                
                <div class="menu-actions">
                    <a href="{{ route('menus.edit', $menu->id) }}">Edit</a>
                    <form action="{{ route('menus.destroy', $menu->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
