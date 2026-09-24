<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function create($destinationId)
    {
        return view('experiences.create', compact('destinationId'));
    }
}