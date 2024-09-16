<!-- resources/views/menues/edit.blade.php -->

<h1>Edit Menu</h1>

<form method="POST" action="{{ route('menus.update', $menu->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label>Name:</label>
        <input type="text" name="name" value="{{ $menu->name }}" required>
    </div>
    <div>
        <label>Price:</label>
        <input type="number" step="0.01" name="price" value="{{ $menu->price }}" required>
    </div>
    <div>
        <label>Restaurant:</label>
        <select name="restaurant_id" required>
            @foreach($restaurants as $restaurant)
                <option value="{{ $restaurant->id }}" {{ $restaurant->id == $menu->restaurant_id ? 'selected' : '' }}>
                    {{ $restaurant->name }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit">Update</button>
</form>
