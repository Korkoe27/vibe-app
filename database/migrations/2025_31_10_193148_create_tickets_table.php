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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->string('ticket_number')->unique();
            $table->string('qr_code');
            $table->enum('status',['valid','used','cancelled','refunded'])->default('valid');
            // $table->string('seat_number')->nullable();
            $table->timestamp('check_in_time')->nullable();
            $table->boolean('is_checked_in')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
