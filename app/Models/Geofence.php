<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Geofence extends Model
{
    use HasFactory;

    
    public function workers()
    {
        return $this->belongsToMany(Workers::class);
    }

    
    public function activityLogs()
    {
        return $this->hasMany(Activity::class);
    }
}
