<?php

namespace App\Http\Controllers;

use App\Models\SavedExperience;

class SavedExperienceController extends Controller
{
    // Affiche les expériences enregistrées par l'utilisateur connecté
    public function index()
    {
        $savedExperiences = SavedExperience::where('user_id', auth()->id())
            ->with('experience.user', 'experience.destination')
            ->get();

        return view('saved-experiences.index', compact('savedExperiences'));
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