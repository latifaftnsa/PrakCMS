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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('product_name', 50);
        $table->string('product_image')->nullable();
        $table->char('grade', 1);
        $table->decimal('price', 12, 2);
        $table->text('description');
        $table->string('stock_status', 20);
        $table->timestamp('upload_date');
        $table->foreignId('user_id')->constrained('users'); 
        $table->foreignId('category_id')->constrained('categories');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
