<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    // Affiche les pays dans lesquels l'utilisateur a publié une expérience
    public function myExperiences()
    {
        // Récupère toutes les expériences de l'utilisateur connecté
        $experiences = Experience::where('user_id', auth()->id())
            ->with('destination')
            ->get();

        // Récupère les pays liés à ces expériences
        // et évite d'afficher plusieurs fois le même pays
        $destinations = $experiences
            ->pluck('destination')
            ->filter()
            ->unique('id');

        return view(
            'experiences.my-experiences',
            compact('destinations')
        );
    }


    // Affiche les expériences de l'utilisateur pour un pays précis
    public function myExperiencesByDestination($destinationId)
    {
        // Récupère uniquement les expériences de l'utilisateur
        // qui appartiennent au pays sélectionné
        $experiences = Experience::where('user_id', auth()->id())
            ->where('destination_id', $destinationId)
            ->with('destination')
            ->get();

        // Si l'utilisateur n'a aucune expérience pour ce pays
        if ($experiences->isEmpty()) {
            abort(404);
        }

        // Récupère les informations du pays
        $destination = $experiences->first()->destination;

        return view(
            'experiences.my-experiences-destination',
            compact('experiences', 'destination')
        );
    }


    // Affiche le formulaire pour ajouter une expérience
    public function create($destinationId)
    {
        return view(
            'experiences.create',
            compact('destinationId')
        );
    }


    // Enregistre une nouvelle expérience dans la BDD
    public function store(Request $request, $destinationId)
    {
        // Vérifie les informations envoyées par le formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'photo' => 'nullable|image|max:2048',
        ]);

        // Crée une nouvelle expérience
        $experience = new Experience();

        // Destination
        $experience->destination_id = $destinationId;

        // Titre
        $experience->title = $request->title;

        // Contenu
        $experience->content = $request->content;

        // Note sur 5
        $experience->rating = $request->rating;


        // Enregistre la photo si une photo a été ajoutée
        if ($request->hasFile('photo')) {

            $experience->photo = $request
                ->file('photo')
                ->store('experiences', 'public');

        } else {

            $experience->photo = null;

        }


        // Associe l'expérience à l'utilisateur connecté
        $experience->user_id = auth()->id();


        // Enregistre l'expérience dans la BDD
        $experience->save();


        // Retourne sur la page du pays
        return redirect(
            '/destinations/' . $destinationId
        );
    }


    // Affiche le formulaire pour modifier une expérience
    public function edit($id)
    {
        // Récupère l'expérience dans la BDD
        $experience = Experience::findOrFail($id);


        // Seul l'auteur peut modifier son expérience
        if ($experience->user_id !== auth()->id()) {

            abort(403);

        }


        // Affiche le formulaire de modification
        return view(
            'experiences.edit',
            compact('experience')
        );
    }


    // Modifie une expérience
    public function update(Request $request, $id)
    {
        // Récupère l'expérience dans la BDD
        $experience = Experience::findOrFail($id);


        // Seul l'auteur peut modifier son expérience
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


        // Modifie le titre
        $experience->title = $request->title;

        // Modifie le contenu
        $experience->content = $request->content;

        // Modifie la note
        $experience->rating = $request->rating;


        // Si une nouvelle photo est ajoutée,
        // elle remplace l'ancienne
        if ($request->hasFile('photo')) {

            $experience->photo = $request
                ->file('photo')
                ->store('experiences', 'public');

        }


        // Enregistre les modifications
        $experience->save();


        // Retourne sur la page du pays
        return redirect(
            '/destinations/' . $experience->destination_id
        );
    }


    // Supprime une expérience
    public function destroy($id)
    {
        // Récupère l'expérience dans la BDD
        $experience = Experience::findOrFail($id);


        // Autorise la suppression uniquement si :
        // - l'utilisateur est l'auteur de l'expérience
        // OU
        // - l'utilisateur est administrateur
        if (
            $experience->user_id !== auth()->id()
            && !auth()->user()->is_admin
        ) {

            abort(403);

        }


        // Récupère l'ID de la destination
        // avant de supprimer l'expérience
        $destinationId = $experience->destination_id;


        // Supprime l'expérience
        $experience->delete();


        // Retourne sur la page du pays
        return redirect(
            '/destinations/' . $destinationId
        );
    }
}