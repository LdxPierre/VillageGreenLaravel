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
        Schema::create('order_details', function (Blueprint $table) {
            $table->unsignedBigInteger('ord_id');
            $table->string('prd_ref', 10);
            $table->integer('ord_quantity');
            $table->float('ord_price_ht', 10, 2);
            $table->timestamps();

            $table->foreign('ord_id')->references('ord_id')->on('orders');
            $table->foreign('prd_ref')->references('prd_ref')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
