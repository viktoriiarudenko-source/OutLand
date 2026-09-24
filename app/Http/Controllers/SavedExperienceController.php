<?php

namespace App\Http\Controllers;

use App\Models\SavedExperience;

class SavedExperienceController extends Controller
{
    // Affiche les pays dans lesquels l'utilisateur
    // a enregistré au moins une expérience
    public function index()
    {
        // Récupère toutes les expériences enregistrées
        // par l'utilisateur connecté
        $savedExperiences = SavedExperience::where('user_id', auth()->id())
            ->with('experience.destination')
            ->get();

        // Récupère uniquement les destinations liées
        // aux expériences enregistrées
        // et évite d'afficher plusieurs fois le même pays
        $destinations = $savedExperiences
            ->pluck('experience.destination')
            ->filter()
            ->unique('id');

        return view(
            'saved-experiences.index',
            compact('destinations')
        );
    }


    // Affiche les expériences enregistrées pour un pays précis
    public function byDestination($destinationId)
    {
        // Récupère les enregistrements de l'utilisateur
        // dont l'expérience appartient au pays sélectionné
        $savedExperiences = SavedExperience::where('user_id', auth()->id())
            ->whereHas('experience', function ($query) use ($destinationId) {
                $query->where('destination_id', $destinationId);
            })
            ->with('experience.user', 'experience.destination')
            ->get();

        // Si l'utilisateur n'a aucun enregistrement pour ce pays
        if ($savedExperiences->isEmpty()) {
            abort(404);
        }

        // Récupère les informations du pays
        $destination = $savedExperiences
            ->first()
            ->experience
            ->destination;

        return view(
            'saved-experiences.destination',
            compact('savedExperiences', 'destination')
        );
    }


    // Enregistre une expérience
    public function store($experienceId)
    {
        SavedExperience::firstOrCreate([
            'user_id' => auth()->id(),
            'experience_id' => $experienceId,
        ]);

        return back();
    }


    // Retire une expérience des favoris
    public function destroy($experienceId)
    {
        SavedExperience::where('user_id', auth()->id())
            ->where('experience_id', $experienceId)
            ->delete();

        return back();
    }
}