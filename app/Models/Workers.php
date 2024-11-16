<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Workers extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'activity_id', 'geofence_id'];

    public function activity()
    {
        return $this->belongsTo(Activity::class); // Define the relationship
    }
    public function geofences()
    {
        return $this->belongsToMany(Geofence::class);
    }
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
