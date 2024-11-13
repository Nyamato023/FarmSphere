<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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
