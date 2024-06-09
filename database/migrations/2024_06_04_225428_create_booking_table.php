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
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('jadwal_id');
            $table->unsignedInteger('type_ticket_id');
            $table->string('users_email');
            $table->timestamp('created_at')->nullable();
            $table->integer('quantity');
            $table->decimal('total_price', 8, 2);
            $table->timestamp('booking_date')->nullable();

            $table->foreign('jadwal_id')->references('id')->on('jadwal')->onDelete('cascade');
            $table->foreign('type_ticket_id')->references('id')->on('type_ticket')->onDelete('cascade');
            $table->foreign('users_email')->references('email')->on('users')->onDelete('cascade');
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
