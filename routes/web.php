<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\Admin\DestinationController as AdminDestinationController;
use Illuminate\Support\Facades\Route;


// HOME PAGE
Route::get('/', function () {
    return view('welcome');
});


// ==============================
// AUTHENTICATION / PROFILE
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

// Show all destinations
Route::get('/destinations', [DestinationController::class, 'index']);

// Show one destination and its experiences
Route::get('/destinations/{id}', [DestinationController::class, 'show']);


// ==============================
// EXPERIENCES
// ==============================

// Show experience creation form
Route::get(
    '/destinations/{destinationId}/experiences/create',
    [ExperienceController::class, 'create']
);

// Store experience
Route::post(
    '/destinations/{destinationId}/experiences',
    [ExperienceController::class, 'store']
);


// ==============================
// ADMIN - DESTINATIONS
// ==============================

Route::middleware('auth')->group(function () {

    // List destinations
    Route::get(
        '/admin/destinations',
        [AdminDestinationController::class, 'index']
    );

    // Create destination form
    Route::get(
        '/admin/destinations/create',
        [AdminDestinationController::class, 'create']
    );

    // Store destination
    Route::post(
        '/admin/destinations',
        [AdminDestinationController::class, 'store']
    );

    // Edit destination form
    Route::get(
        '/admin/destinations/{id}/edit',
        [AdminDestinationController::class, 'edit']
    );

    // Update destination
    Route::post(
        '/admin/destinations/{id}',
        [AdminDestinationController::class, 'update']
    );

    // Delete destination
    Route::delete(
        '/admin/destinations/{id}',
        [AdminDestinationController::class, 'destroy']
    );
});


// ==============================
// AUTHENTICATION ROUTES
// ==============================

require __DIR__.'/auth.php';