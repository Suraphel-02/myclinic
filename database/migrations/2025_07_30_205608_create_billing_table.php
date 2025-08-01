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
    Schema::create('billing', function (Blueprint $table) {
        $table->id();
        $table->foreignId('patient_id')->constrained()->onDelete('cascade');
        $table->foreignId('appointment_id')->constrained()->onDelete('cascade');
        $table->decimal('amount', 10, 2);
        $table->enum('payment_status', ['Pending', 'Paid', 'Cancelled'])->default('Pending');
        $table->enum('payment_method', ['Cash', 'Card', 'Insurance', 'Online'])->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing');
    }
};
