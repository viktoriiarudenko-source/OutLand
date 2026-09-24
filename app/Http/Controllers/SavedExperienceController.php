<?php

namespace App\Http\Controllers;

use App\Models\SavedExperience;

class SavedExperienceController extends Controller
{
    // Enregistre une expérience dans les favoris de l'utilisateur connecté
    public function store($experienceId)
    {
        SavedExperience::firstOrCreate([
            'user_id' => auth()->id(),
            'experience_id' => $experienceId,
        ]);

        return back();
    }

    // Retire une expérience des favoris de l'utilisateur connecté
    public function destroy($experienceId)
    {
        SavedExperience::where('user_id', auth()->id())
            ->where('experience_id', $experienceId)
            ->delete();

        return back();
    }
}