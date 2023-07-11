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
            $table->decimal('total', 8, 2);
            $table->decimal('subtotal', 8, 2);
            $table->decimal('desconto', 8, 2)->nullable();
            $table->text('obs')->nullable();
            $table->foreignId('customer_id')->constrained();
            $table->enum('status',['pendente', 'concluido'])->default('pendente');
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
