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

    public function create()
    {
        return view('admin.destinations.create');
    }

    public function store()
    {
        Destination::create([
            'name' => request('name'),
            'image' => request('image'),
            'description' => request('description'),
        ]);

        return redirect('/admin/destinations');
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);

        return view('admin.destinations.edit', compact('destination'));
    }
    public function update($id)
{
    $destination = Destination::findOrFail($id);

    $destination->update([
        'name' => request('name'),
        'image' => request('image'),
        'description' => request('description'),
    ]);

    return redirect('/admin/destinations');
}
}