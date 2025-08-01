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
    Schema::create('treatments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('appointment_id')->constrained()->onDelete('cascade');
        $table->text('description');
        $table->json('prescribed_medications')->nullable();
        $table->dateTime('treatment_date');
        $table->text('notes')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatments');
    }
};
