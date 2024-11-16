<?php

// database/migrations/xxxx_xx_xx_create_zones_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonesTable extends Migration
{
    public function up()
    {
        Schema::create('zones', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Add name column
            $table->float('radius'); // Radius as a float
            $table->decimal('latitude', 10, 7); // Latitude with precision
            $table->decimal('longitude', 10, 7); // Longitude with precision
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zones');
    }
}
