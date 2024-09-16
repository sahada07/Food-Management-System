<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;

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
    Menu::create($request->all());
    return redirect()->route('menus.index');
}

public function edit(Menu $menus)
{
    $restaurants = Restaurant::all();
    return view('menus.edit', compact('menu', 'restaurants'));
}

public function update(Request $request, Menu $menus)
{
    $dish->update($request->all());
    return redirect()->route('menus.index');
}

public function destroy(Menu $dish)
{
    $dish->delete();
    return redirect()->route('menus.index');
}

}
