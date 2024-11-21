<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    }

    public function create()
    {
        $trainers = Trainer::all();
        return view('pokemons.create', compact('trainers'));
    }

    public function store(Request $request)
    {
        $image = $request->file('image')->store('images', 'public');
        Pokemon::create([
            'name' => $request->name,
            'type' => $request->type,
            'power_points' => $request->power_points,
            'trainer_id' => $request->trainer_id,
            'image' => $image
        ]);
        return redirect('pokemons')->with('success', 'Pokemon created successfully.');
    }

    public function edit($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $trainers = Trainer::all();
        return view('pokemons.edit', compact(['pokemon', 'trainers']));
    }

    public function update(Request $request, $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $image = $request->file('image')->store('images', 'public');
        $pokemon->update([
            'name' => $request->name,
            'type' => $request->type,
            'power_points' => $request->power_points,
            'trainer_id' => $request->trainer_id,
            'image' => $image
        ]);
        
        return redirect('pokemons')->with('success', 'Pokemon updated successfully.');
    }

    public function destroy($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
        return redirect('pokemons')->with('success', 'Pokemon deleted successfully.');
    }
}
