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
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->enum('role', ['Admin', 'Doctor', 'Nurse', 'Receptionist']);
        $table->string('email')->unique();
        $table->string('password');
        $table->string('phone', 20)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the users table if it exists.
        Schema::dropIfExists('users');
    }
};
