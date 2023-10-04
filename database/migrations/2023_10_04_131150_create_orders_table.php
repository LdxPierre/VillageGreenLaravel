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
            $table->id('ord_id');
            $table->unsignedBigInteger('usr_id');
            $table->float('ord_discount', 10, 2);
            $table->string('ord_payement', 10);
            $table->string('ord_status', 10);
            $table->date('ord_shipping');
            $table->date('ord_delivery');
            $table->string('ord_shp_firstname', 50);
            $table->string('ord_shp_lastname', 50);
            $table->string('ord_shp_country', 100);
            $table->string('ord_shp_region', 100);
            $table->string('ord_shp_zip_code', 20);
            $table->string('ord_shp_city', 100);
            $table->string('ord_shp_line', 50);
            $table->string('ord_bil_firstname', 50);
            $table->string('ord_bil_lastname', 50);
            $table->string('ord_bil_country', 100);
            $table->string('ord_bil_region', 100);
            $table->string('ord_bil_zip_code', 20);
            $table->string('ord_bil_city', 100);
            $table->string('ord_bil_line', 50);
            $table->timestamps();

            $table->foreign('usr_id')->references('usr_id')->on('users');
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
