<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $fillable = ['worker_id', 'geofence_id', 'timestamp', 'action', 'location'];

    protected $casts = [
        'timestamp' => 'datetime',
    ];

    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }

    public function geofence()
    {
        return $this->belongsTo(Geofence::class);
    }
}
