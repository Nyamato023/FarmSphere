<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ActivityLog;
use Carbon\Carbon;

class ActivityLogs extends Component
{
    public $logs;
    public $filterWorkerId;
    public $filterDate;

    public function mount()
    {
        $this->fetchLogs();
    }

    public function fetchLogs()
    {
        $query = ActivityLog::query();

        if ($this->filterWorkerId) {
            $query->where('worker_id', $this->filterWorkerId);
        }

        if ($this->filterDate) {
            $query->whereDate('timestamp', $this->filterDate);
        }

        $this->logs = $query->with('worker', 'geofence')->orderBy('timestamp', 'desc')->get();
    }

    public function updated($propertyName)
    {
        $this->fetchLogs();
    }

    public function render()
    {
        return view('livewire.activity-logs');
    }
}
