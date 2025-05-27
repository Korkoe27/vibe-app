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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->foreignId('organization_id');
            $table->foreignId('categories_id');
            $table->foreignId('subcategories_id')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->timestamp('registration_deadline')->nullable();
            $table->string('venue')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            // $table->string('zip_code')->nullable();
            $table->enum('status',['draft','published','archived','canceled','completed','banned'])->default('draft');
            $table->string('custom_url')->unique()->nullable();
            $table->boolean('pass_fee_to_customer')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_private')->default(false);
            $table->string('thumbnail')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
