<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/destinations', [DestinationController::class, 'index']);

Route::get('/destinations/{id}', [DestinationController::class, 'show']);

use App\Http\Controllers\Admin\DestinationController as AdminDestinationController;

Route::get('/admin/destinations', [AdminDestinationController::class, 'index']);