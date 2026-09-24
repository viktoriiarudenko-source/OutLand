<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\Admin\DestinationController as AdminDestinationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/destinations', [DestinationController::class, 'index']);

Route::get('/destinations/{id}', [DestinationController::class, 'show']);

Route::get('/admin/destinations', [AdminDestinationController::class, 'index']);

Route::get('/admin/destinations/create', [AdminDestinationController::class, 'create']);

Route::post('/admin/destinations', [AdminDestinationController::class, 'store']);

Route::get('/admin/destinations/{id}/edit', [AdminDestinationController::class, 'edit']);

Route::post('/admin/destinations/{id}', [AdminDestinationController::class, 'update']);
//maeva
