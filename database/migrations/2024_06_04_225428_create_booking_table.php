<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jadwal_id');
            $table->unsignedBigInteger('type_ticket_id');
            $table->unsignedBigInteger('users_id');
            $table->timestamp('created_at')->nullable();
            $table->integer('quantity');
            $table->decimal('total_price', 8, 2);
            $table->timestamp('booking_date');

            $table->foreign('jadwal_id')->references('id')->on('schedules')->onDelete('cascade');
            $table->foreign('type_ticket_id')->references('id')->on('type_tickets')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
