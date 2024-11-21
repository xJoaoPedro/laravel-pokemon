<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TrainerController extends Controller
{
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers.index', compact('trainers'));
    }

    public function create()
    {
        return view('trainers.create');
    }

    public function store(Request $request)
    {
        $image = $request->file('image')->store('images', 'public');
        Trainer::create([
            'name' => $request->name,
            'image' => $image
        ]);
        return redirect('trainers')->with('success', 'Trainer created successfully.');
    }

    public function edit($id)
    {
        $trainer = Trainer::findOrFail($id);
        return view('trainers.edit', compact('trainer'));
    }

    public function update(Request $request, $id)
    {
        $trainer = Trainer::findOrFail($id);
        $image = $request->file('image')->store('images', 'public');
        $trainer->update([
            'name' => $request->name,
            'image' => $image
        ]);

        return redirect('trainers')->with('success', 'Trainer updated successfully.');
    }

    public function destroy($id)
    {
        $trainer = Trainer::findOrFail($id);
        $trainer->delete();
        return redirect('trainers')->with('success', 'Trainer deleted successfully.');
    }
}
