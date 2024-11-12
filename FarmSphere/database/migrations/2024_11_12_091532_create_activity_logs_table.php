<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLogsTable extends Migration
{
    public function up()
    {
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('worker_id')->constrained()->onDelete('cascade');
            $table->foreignId('geofence_id')->nullable()->constrained()->onDelete('set null'); // Optional
            $table->timestamp('timestamp');
            $table->string('action'); // e.g., "Entered", "Exited"
            $table->string('location')->nullable(); // Latitude,Longitude of the event
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('activity_logs');
    }
}
