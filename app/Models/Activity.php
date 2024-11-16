<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    public function workers()
    {
        return $this->hasMany(workers::class); // Define the relationship
    }
    public function geofence()
    {
        return $this->belongsTo(Geofence::class);
    }
}
