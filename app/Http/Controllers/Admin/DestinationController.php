<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destination;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();

        return view('admin.destinations.index', compact('destinations'));
    }

    public function create()
    {
        return view('admin.destinations.create');
    }

    public function store(Request $request)
    {
        // Vérification des informations
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'nullable|string',
        ]);

        // Enregistrement de l'image
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('destinations', 'public');
        }

        // Création de la destination
        Destination::create([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect('/admin/destinations');
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);

        return view('admin.destinations.edit', compact('destination'));
    }

    public function update($id)
    {
        $destination = Destination::findOrFail($id);

        $destination->update([
            'name' => request('name'),
            'image' => request('image'),
            'description' => request('description'),
        ]);

        return redirect('/admin/destinations');
    }

    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);

        $destination->delete();

        return redirect('/admin/destinations');
    }
}