<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Geofences;
use App\Http\Livewire\Notifications;
use App\Http\Livewire\ActivityLogs;
use Illuminate\Support\Facades\Route;

// Livewire routes for components
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/geofence', Geofences::class)->name('geofence');
Route::get('/notifications', Notifications::class)->name('notifications');
Route::get('/activity-logs', ActivityLogs::class)->name('activity-logs');
