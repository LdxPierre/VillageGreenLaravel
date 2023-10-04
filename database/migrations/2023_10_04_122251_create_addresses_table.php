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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id('adr_id');
            $table->unsignedBigInteger('usr_id');
            $table->string('adr_libelle', 50);
            $table->string('adr_firstname', 50);
            $table->string('adr_lastname', 50);
            $table->string('adr_country', 100);
            $table->string('adr_region', 100);
            $table->string('adr_zip_code', 20);
            $table->string('adr_city', 100);
            $table->string('adr_line', 100);
            $table->timestamps();

            $table->foreign('usr_id')->references('usr_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
