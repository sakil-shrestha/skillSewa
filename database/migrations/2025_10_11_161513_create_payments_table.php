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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // the user who paid
            $table->foreignId('professional_id')->nullable()->constrained()->onDelete('cascade'); // the service provider
            $table->foreignId('booking_id')->nullable()->constrained()->onDelete('cascade'); // related booking
            $table->string('transaction_id')->nullable(); // Khalti idx
            $table->integer('amount');
            $table->string('status')->default('success'); // success/failed/pending
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
