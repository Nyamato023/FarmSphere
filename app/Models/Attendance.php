<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['worker_id', 'status', 'marked_at'];
    public function Workers()
    {
        return $this->hasMany(Workers::class);
    }
}
