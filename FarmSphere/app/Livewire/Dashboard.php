<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Worker;
use App\Models\Geofence;
use App\Models\Notification;

class Dashboard extends Component
{
    public $workerCount;
    public $geofenceStatus;
    public $activeAlerts;

    protected $listeners = ['refreshDashboard' => '$refresh']; // Real-time updates

    public function mount()
    {
        $this->fetchData();
    }

    public function fetchData()
    {
        $this->workerCount = Worker::count();
        $this->geofenceStatus = Geofence::all(); // Fetch geofence data as needed
        $this->activeAlerts = Notification::where('status', 'unread')->count();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
