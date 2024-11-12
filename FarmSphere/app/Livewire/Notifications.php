<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Notification;

class Notifications extends Component
{
    public $notifications;

    public function mount()
    {
        $this->notifications = Notification::where('status', 'unread')->get();
    }

    public function markAsRead($notificationId)
    {
        $notification = Notification::find($notificationId);
        $notification->update(['status' => 'read']);
        $this->notifications = Notification::where('status', 'unread')->get();
    }

    public function render()
    {
        return view('livewire.notifications');
    }
}
