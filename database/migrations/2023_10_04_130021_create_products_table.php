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
            $table->string('prd_ref', 10)->primary();
            $table->string('sup_ref', 10);
            $table->unsignedBigInteger('cat_id');
            $table->string('prd_libelle', 50);
            $table->text('prd_desc')->nullable();
            $table->float('prd_price_ht', 10, 2);
            $table->string('prd_img');
            $table->boolean('prd_actif')->default(false);
            $table->timestamps();

            $table->foreign('sup_ref')->references('sup_ref')->on('suppliers');
            $table->foreign('cat_id')->references('cat_id')->on('categories');
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
