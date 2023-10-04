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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->unsignedBigInteger('usr_id');
            $table->string('prd_ref', 10);
            $table->integer('crt_quantity');
            $table->timestamps();

            $table->foreign('usr_id')->references('usr_id')->on('users');
            $table->foreign('prd_ref')->references('prd_ref')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
