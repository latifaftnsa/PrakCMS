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
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->string('order_number', 50)->unique();
        $table->date('transaction_date');
        $table->decimal('total_price', 12, 2);
        $table->string('payment_method', 30);
        $table->string('transaction_status', 20);
        $table->text('shipping_address');
        $table->foreignId('user_id')->constrained('users'); // Merujuk ke siapa yang membeli
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
