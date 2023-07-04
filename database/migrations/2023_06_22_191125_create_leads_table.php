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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('value',8,2)->default(0);
            $table->string('name_customer');
            $table->string('phone_customer');
            $table->string('email_customer');
            $table->string('product')->nullable();
            $table->enum('source',['site', 'facebook', 'google', 'whatsapp','instagram', 'indicacao'])->default('site');
            $table->enum('stages',['new', 'flow', 'prospect', 'negotiation', 'win', 'lost'])->default('new');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
