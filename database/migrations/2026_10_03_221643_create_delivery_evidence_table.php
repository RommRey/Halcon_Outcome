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
        Schema::create('delivery_evidences', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number')->unique();
            $table->foreign('invoice_number')->references('invoice_number')->on('orders')->onDelete('cascade');
            $table->string('loaded_photo_path')->nullable();
            $table->string('unloaded_photo_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_evidence');
    }
};
