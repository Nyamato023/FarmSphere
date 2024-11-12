<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Geofence;

class Geofences extends Component
{
    public $geofences;

    public function mount()
    {
        $this->geofences = Geofence::all();
    }

    public function render()
    {
        return view('livewire.geofence');
    }
}
