<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destination;
use App\Http\Controllers\Controller;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();

        return view('admin.destinations.index', compact('destinations'));
    }
}