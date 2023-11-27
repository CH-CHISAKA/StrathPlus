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
        Schema::create('pick__up__orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('order_number');
            $table->string('status')->default('pending');
            $table -> string('location');
            $table ->string ('tel_number');
            $table -> text('Review'); 
            $table -> dateTime('res_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pick__up__orders');
    }
};
