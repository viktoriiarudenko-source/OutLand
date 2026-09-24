<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Experience;

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
        $experiences = Experience::where('destination_id', $id)->get();

        // Calcule la moyenne des notes de la destination
        // Les anciens commentaires sans note ne sont pas comptés
        $averageRating = $experiences
            ->whereNotNull('rating')
            ->avg('rating');

        return view(
            'destinations.show',
            compact('destination', 'experiences', 'averageRating')
        );
    }
}