<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Geofence;
use App\Models\Attendance;
use App\Models\Workers;

class WorkersController extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workers = Workers::all();
        return view('workers.index', compact('workers'));
    }

    // Show the form to create a new worker
    public function create()
    {
        $activities = Activity::all();
        $geofences = Geofence::all();
        $attendances = Attendance::all();
        return view('workers.create', compact('activities', 'geofences', 'attendances'));
    }

    // Store a newly created worker
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'activity_id' => 'required|exists:activities,id',
            'geofence_id' => 'required|exists:geofences,id',
            'attendance_id' => 'required|exists:attendances,id',
        ]);

        Workers::create($request->all());
        return redirect()->route('Workers');
    }

    // Display a specific worker
    public function show($id)
    {
        $worker = Workers::with(['activity', 'geofence', 'attendance'])->findOrFail($id);
        return view('workers.show', compact('worker'));
    }

    // Show the form to edit a worker
    public function edit($id)
    {
        $worker = Workers::findOrFail($id);
        $activities = Activity::all();
        $geofences = Geofence::all();
        $attendances = Attendance::all();
        return view('workers.edit', compact('worker', 'activities', 'geofences', 'attendances'));
    }

    // Update a worker
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'activity_id' => 'required|exists:activities,id',
            'geofence_id' => 'required|exists:geofences,id',
            'attendance_id' => 'required|exists:attendances,id',
        ]);

        $worker = Workers::findOrFail($id);
        $worker->update($request->all());
        return redirect()->route('Workers');
    }

    // Delete a worker
    public function destroy($id)
    {
        $worker = Workers::findOrFail($id);
        $worker->delete();
        return redirect()->route('Workers');
    }
}
