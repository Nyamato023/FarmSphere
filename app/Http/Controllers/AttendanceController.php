<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        return view('Attendance', compact('attendances'));
    }

    // Show the form to create a new attendance
    public function create()
    {
        return view('attendances.create');
    }

    // Store a newly created attendance
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        Attendance::create($request->all());
        return redirect()->route('Attendance');
    }

    // Display a specific attendance and its workers
    public function show($id)
    {
        $attendance = Attendance::with('workers')->findOrFail($id);
        return view('attendances.show', compact('attendance'));
    }

    // Show the form to edit an attendance
    public function edit($id)
    {
        $attendance = Attendance::findOrFail($id);
        return view('attendances.edit', compact('attendance'));
    }

    // Update an attendance
    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        $attendance = Attendance::findOrFail($id);
        $attendance->update($request->all());
        return redirect()->route('Attendance');
    }

    // Delete an attendance
    public function destroy($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();
        return redirect()->route('Attendance');
    }
}
