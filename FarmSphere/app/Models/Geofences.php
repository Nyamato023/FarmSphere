<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geofence extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'coordinates'];

    protected $casts = [
        'coordinates' => 'array', // Automatically decode JSON coordinates
    ];

    public function workers()
    {
        return $this->hasMany(Worker::class);
    }

    public function activityLogs()
    {
        return $this->hasMany(ActivityLog::class);
    }
}
