<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::all();
        $user = Auth::user();
        return view('pokemon.index', compact(['pokemon', 'user']));
    }

    public function create()
    {
        Gate::authorize('create', Pokemon::class);

        $coaches = Coach::all();
        return view('pokemon.create', compact('coaches'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'power' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $pokemon = new Pokemon();
        $pokemon->name = $request->name;
        $pokemon->type = $request->type;
        $pokemon->power = $request->power;
        $pokemon->coach_id = $request->coach_id;
        $pokemon->image = 'images/'.$imageName;
        $pokemon->save();

        return redirect('pokemon')->with('success', 'Pokemon created successfully.');
    }

    public function edit($id)
    {
        Gate::authorize('edit', Pokemon::class);

        $pokemon = Pokemon::findOrFail($id);
        $coaches = Coach::all();
        return view('pokemon.edit', compact(['pokemon', 'coaches']));
    }

    public function update(Request $request, $id)
    {
        $pokemon = Pokemon::findOrFail($id);

        if(!is_null($request->image)) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $pokemon->image = 'images/'.$imageName;
        }

        $pokemon->name = $request->name;
        $pokemon->type = $request->type;
        $pokemon->power = $request->power;
        $pokemon->coach_id = $request->coach_id;
        $pokemon->save();

        return redirect('pokemon')->with('success', 'Pokemon updated successfully.');
    }

    public function destroy($id)
    {
        Gate::authorize('destroy', Pokemon::class);

        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
        return redirect('pokemon')->with('success', 'Pokemon deleted successfully.');
    }
}
