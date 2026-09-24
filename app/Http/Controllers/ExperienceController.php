<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    // Affiche les expériences publiées par l'utilisateur connecté
    public function myExperiences()
    {
        $experiences = Experience::where('user_id', auth()->id())
            ->with('destination')
            ->get();

        return view('experiences.my-experiences', compact('experiences'));
    }


    // Affiche le formulaire pour ajouter un commentaire
    public function create($destinationId)
    {
        return view('experiences.create', compact('destinationId'));
    }

    // Enregistre le commentaire dans la BDD
    public function store(Request $request, $destinationId)
    {
        // Vérifie les informations envoyées par le formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'photo' => 'nullable|image|max:2048',
        ]);

        $experience = new Experience();

        $experience->destination_id = $destinationId;
        $experience->title = $request->title;
        $experience->content = $request->content;

        // Enregistre la note sur 5
        $experience->rating = $request->rating;

        // Enregistre la photo si une photo a été ajoutée
        if ($request->hasFile('photo')) {
            $experience->photo = $request->file('photo')->store('experiences', 'public');
        } else {
            $experience->photo = null;
        }

        // Utilisateur actuellement connecté
        $experience->user_id = auth()->id();

        $experience->save();

        // Retourne sur la page du pays
        return redirect('/destinations/' . $destinationId);
    }

    // Affiche le formulaire pour modifier un commentaire
    public function edit($id)
    {
        // Récupère le commentaire dans la BDD
        $experience = Experience::findOrFail($id);

        // Vérifie que l'utilisateur connecté est bien l'auteur
        if ($experience->user_id !== auth()->id()) {
            abort(403);
        }

        // Affiche le formulaire de modification
        return view('experiences.edit', compact('experience'));
    }

    // Modifie un commentaire
    public function update(Request $request, $id)
    {
        // Récupère le commentaire dans la BDD
        $experience = Experience::findOrFail($id);

        // Vérifie que l'utilisateur connecté est bien l'auteur
        if ($experience->user_id !== auth()->id()) {
            abort(403);
        }

        // Vérifie les nouvelles informations
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'photo' => 'nullable|image|max:2048',
        ]);

        // Modifie le titre, le contenu et la note
        $experience->title = $request->title;
        $experience->content = $request->content;
        $experience->rating = $request->rating;

        // Si une nouvelle photo est ajoutée, remplace l'ancienne
        if ($request->hasFile('photo')) {
            $experience->photo = $request->file('photo')->store('experiences', 'public');
        }

        // Enregistre les modifications
        $experience->save();

        // Retourne sur la page du pays
        return redirect('/destinations/' . $experience->destination_id);
    }

    // Supprime un commentaire
    public function destroy($id)
    {
        // Récupère le commentaire dans la BDD
        $experience = Experience::findOrFail($id);

        // Vérifie que l'utilisateur connecté est bien l'auteur
        if ($experience->user_id !== auth()->id()) {
            abort(403);
        }

        // Récupère l'ID de la destination avant la suppression
        $destinationId = $experience->destination_id;

        // Supprime le commentaire
        $experience->delete();

        // Retourne sur la page du pays
        return redirect('/destinations/' . $destinationId);
    }
}