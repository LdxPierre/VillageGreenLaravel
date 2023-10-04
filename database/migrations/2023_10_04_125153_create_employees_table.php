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
        Schema::create('employees_table', function (Blueprint $table) {
            $table->id('emp_id');
            $table->unsignedBigInteger('usr_id');
            $table->string('dep_code', 5);
            $table->string('emp_firstname', 50);
            $table->string('emp_lastname', 50);
            $table->string('emp_poste', 20);
            $table->timestamps();

            $table->foreign('usr_id')->references('usr_id')->on('users');
            $table->foreign('dep_code')->references('dep_code')->on('departements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees_table');
    }
};
