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
            $table->id();
            $table->foreignId('client_id')->constrained('users');
            $table->timestamp('order_date');
            $table->timestamp('shipping_date')->nullable();
            $table->timestamp('installation_date')->nullable();
            $table->string('status', 100);
            $table->decimal('displacement_price', 10, 2)->nullable();
            $table->string('payment_method', 100);
            $table->string('shipping_address');
            $table->string('installation_address')->nullable();
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
