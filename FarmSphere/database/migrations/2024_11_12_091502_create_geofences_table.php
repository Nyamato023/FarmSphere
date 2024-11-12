<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeofencesTable extends Migration
{
    public function up()
    {
        Schema::create('geofences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->json('coordinates'); // Store latitudes and longitudes as JSON
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('geofences');
    }
}
