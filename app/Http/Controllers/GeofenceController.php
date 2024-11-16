<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Geofence;

class GeofenceController extends Controller
{
    public function index()
    {
        $geofences = Geofence::all();
        return view('Geofence', compact('geofences'));
    }

    // Show the form to create a new geofence
    public function create()
    {
        return view('geofences.create');
    }

    // Store a newly created geofence
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'coordinates' => 'required|string', // You can adjust the coordinates validation as needed
        ]);

        Geofence::create($request->all());
        return redirect()->route('Geofence');
    }

    // Display a specific geofence and its workers
    public function show($id)
    {
        $geofence = Geofence::with('workers')->findOrFail($id);
        return view('geofences.show', compact('geofence'));
    }

    // Show the form to edit a geofence
    public function edit($id)
    {
        $geofence = Geofence::findOrFail($id);
        return view('geofences.edit', compact('geofence'));
    }

    // Update a geofence
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'coordinates' => 'required|string',
        ]);

        $geofence = Geofence::findOrFail($id);
        $geofence->update($request->all());
        return redirect()->route('Geofence');
    }

    // Delete a geofence
    public function destroy($id)
    {
        $geofence = Geofence::findOrFail($id);
        $geofence->delete();
        return redirect()->route('Geofence');
    }
}
