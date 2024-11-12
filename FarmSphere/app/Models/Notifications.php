<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['worker_id', 'title', 'message', 'status', 'sent_at'];

    // Relationships
    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }
}
