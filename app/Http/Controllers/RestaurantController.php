<?php
namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Mail\RestaurantCreatedNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurants.index', compact('restaurants'));
    }

    public function create()
    {
        return view('restaurants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $restaurant = Restaurant::create([
            'name' => $request->name,
            'location' => $request->location,
        ]);

        // Send the email notification after the restaurant is created
        Mail::to(Auth::user()->email)->send(new RestaurantCreatedNotification(Auth::user(), $restaurant));

        return redirect()->route('restaurants.index')->with('success', 'Restaurant created successfully!');
    }

    public function edit(Restaurant $restaurant)
    {
        return view('restaurants.edit', compact('restaurant'));
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        $restaurant->update($request->all());
        return redirect()->route('restaurants.index');
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect()->route('restaurants.index');
    }
}
