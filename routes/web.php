<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('landing');

Route::get('/Dashboard', function () {
    return view('Dashboard');
})->name('dashboard');

Route::get('/Attendance', function () {
    return view('Attendance');
})->name('attendance');

Route::get('/Geofence', function () {
    return view('Geofence');
})->name('geofence');

Route::get('/Notifications', function () {
    return view('Notifications');
})->name('notifications');

Route::get('/Reports', function () {
    return view('Reports');
})->name('reports');

Route::get('/Settings', function () {
    return view('Settings');
})->name('settings');

Route::get('/Support', function () {
    return view('Support');
})->name('support');

Route::get('/TaskManagement', function () {
    return view('TaskManagement');
})->name('taskManagement');

Route::get('/Workers', function () {
    return view('Workers');
})->name('workers');

// Route::get('/Login', function () {
//     return view('LogIn.LogIn');
// })->name('login');

// Route::get('/SignUp', function () {
//     return view('LogIn.SignUp');
// })->name('signup');




// Render the Login page
Route::view('/login', 'LogIn.LogIn')->name('login');

// Render the Signup page
Route::view('/signup', 'LogIn.SignUp')->name('signup');

// Render the Dashboard
Route::view('/dashboard', 'dashboard')->name('dashboard');

// Redirect after signup
Route::post('/signup', function (\Illuminate\Http\Request $request) {
    // Process signup logic
    // For now, just redirect to login after signup
    return redirect()->route('login')->with('success', 'Account created successfully!');
});

// Redirect after login
Route::post('/login', function (\Illuminate\Http\Request $request) {
    // Process login logic
    // For now, just redirect to dashboard after login
    return redirect()->route('dashboard');
});
