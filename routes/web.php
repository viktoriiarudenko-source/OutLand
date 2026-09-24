<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\Admin\DestinationController as AdminDestinationController;
use Illuminate\Support\Facades\Route;


// PAGE D'ACCUEIL
Route::get('/', function () {
    return view('welcome');
});


// ==============================
// AUTHENTIFICATION / PROFIL
// ==============================

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


// ==============================
// DESTINATIONS
// ==============================

// Afficher tous les pays
Route::get('/destinations', [DestinationController::class, 'index']);

// Afficher un pays + ses commentaires
Route::get('/destinations/{id}', [DestinationController::class, 'show']);


// ==============================
// COMMENTAIRES / EXPERIENCES
// ==============================

// Formulaire pour ajouter un commentaire
Route::get(
    '/destinations/{destinationId}/experiences/create',
    [ExperienceController::class, 'create']
);

// Enregistrer le commentaire
Route::post(
    '/destinations/{destinationId}/experiences',
    [ExperienceController::class, 'store']
);


// ==============================
// ADMIN - DESTINATIONS
// ==============================

// Liste des destinations
Route::get(
    '/admin/destinations',
    [AdminDestinationController::class, 'index']
);

// Formulaire création
Route::get(
    '/admin/destinations/create',
    [AdminDestinationController::class, 'create']
);

// Enregistrer une destination
Route::post(
    '/admin/destinations',
    [AdminDestinationController::class, 'store']
);

// Formulaire modification
Route::get(
    '/admin/destinations/{id}/edit',
    [AdminDestinationController::class, 'edit']
);

// Modifier une destination
Route::post(
    '/admin/destinations/{id}',
    [AdminDestinationController::class, 'update']
);


// ==============================
// ROUTES D'AUTHENTIFICATION
// ==============================

require __DIR__.'/auth.php';