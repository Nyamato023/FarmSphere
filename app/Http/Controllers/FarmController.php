<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;

class FarmController extends Controller
{
    public function index()
    {
        $zones = Zone::all();
        return view('geofence', compact('zones'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'radius' => 'required|numeric|min:0',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        Zone::updateOrCreate(
            ['name' => $validated['name']], // Use the name to determine uniqueness
            $validated
        );

        return redirect()->route('geofences.index')->with('success', 'Geofence created/updated successfully!');
    }

    public function destroy($id)
    {
        Zone::findOrFail($id)->delete();
        return redirect()->route('geofences.index')->with('success', 'Geofence deleted successfully.');
    }
}
