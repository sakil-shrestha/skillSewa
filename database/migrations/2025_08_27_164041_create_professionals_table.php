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
        Schema::create('professionals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('email');
            $table->string('contact')->nullable();
            $table->string('address')->nullable();
            $table->string('profile')->nullable();
            $table->boolean('is_available')->default(0);
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->date('dob')->nullable();
            $table->string('remember_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professionals');
    }
};
