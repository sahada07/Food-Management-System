<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Mail\MenuCreatedNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('restaurant')->get();
        return view('menus.index', compact('menus'));
    }

    public function create()
    {
        $restaurants = Restaurant::all();
        return view('menus.create', compact('restaurants'));
    }

    public function store(Request $request)
    {
        $menu = Menu::create($request->all());

        // Send the email notification after the menu is created
        Mail::to(Auth::user()->email)->send(new MenuCreatedNotification(Auth::user(), $menu));

        return redirect()->route('menus.index')->with('success', 'Menu created successfully!');
    }

    public function edit(Menu $menu) 
    {
        $restaurants = Restaurant::all();
        return view('menus.edit', compact('menu', 'restaurants'));
    }

    public function update(Request $request, Menu $menu)
    {
        $menu->update($request->all());
        return redirect()->route('menus.index');
    }

    public function destroy(Menu $menu) 
    {
        $menu->delete();
        return redirect()->route('menus.index');
    }
}
