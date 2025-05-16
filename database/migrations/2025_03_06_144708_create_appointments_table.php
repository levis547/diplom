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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('salon_id')->constrained('salons')->onDelete('cascade'); // Связь с салоном
            $table->string('client_name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->text('comment')->nullable();
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->foreignId('master_id')->constrained()->onDelete('cascade');
            $table->dateTime('appointment_datetime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
