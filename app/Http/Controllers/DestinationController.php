<?php

namespace App\Http\Controllers;

use App\Models\Destination;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();

        return view('destinations.index', compact('destinations'));
    }

    public function show($id)
{
    // Récupère le pays
    $destination = Destination::findOrFail($id);

    // Récupère tous les commentaires liés à ce pays
    $experiences = \App\Models\Experience::where('destination_id', $id)->get();

    return view('destinations.show', compact('destination', 'experiences'));
}
}