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
        Schema::create('orders', function (Blueprint $table) {
            $table->string('invoice_number')->primary();
            $table->string('customer_number');
            $table->foreign('customer_number')->references('customer_number')->on('customers')->onDelete('cascade');
            $table->dateTime('order_date');
            $table->text('delivery_address');
            $table->enum('status', ['Ordered', 'In process', 'In route', 'Delivered'])->default('Ordered');
            $table->text('notes')->nullable();
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
