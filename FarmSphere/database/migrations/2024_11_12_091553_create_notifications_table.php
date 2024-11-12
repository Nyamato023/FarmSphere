<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('worker_id')->constrained()->onDelete('cascade'); // Notification recipient (worker)
            $table->string('title'); // Title of the notification
            $table->text('message'); // Content of the notification
            $table->enum('status', ['unread', 'read'])->default('unread'); // Read/unread status
            $table->timestamp('sent_at')->nullable(); // When the notification was sent
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
