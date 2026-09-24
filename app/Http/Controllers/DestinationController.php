<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Experience;

class DestinationController extends Controller
{
    // PAGE D'ACCUEIL
    public function home()
    {
        // Récupère quelques destinations pour les présenter sur l'accueil
        $destinations = Destination::take(3)->get();

        return view('welcome', compact('destinations'));
    }


    // PAGE EXPLORER
    public function index()
    {
        $destinations = Destination::all();

        return view('destinations.index', compact('destinations'));
    }


    // PAGE D'UNE DESTINATION
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