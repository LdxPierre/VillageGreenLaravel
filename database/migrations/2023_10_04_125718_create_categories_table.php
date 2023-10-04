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
        Schema::create('categories', function (Blueprint $table) {
            $table->id('cat_id');
            $table->unsignedBigInteger('mct_id');
            $table->string('cat_libelle', 50);
            $table->string('cat_img')->nullable();
            $table->timestamps();

            $table->foreign('mct_id')->references('mct_id')->on('main_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
