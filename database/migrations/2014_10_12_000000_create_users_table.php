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
        Schema::create('users', function (Blueprint $table) {
            $table->id('usr_id');
            $table->string('usr_email', 50)->unique();
            $table->string('usr_phone', 20)->nullable();
            $table->timestamp('usr_email_verified_at')->nullable();
            $table->string('usr_password');
            $table->string('usr_type', 20);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
