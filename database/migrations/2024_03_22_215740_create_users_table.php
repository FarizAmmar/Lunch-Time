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
            $table->string('UUID', 20)->primary();
            $table->string('account_no', 10)->unique();
            $table->string('name', 30)->unique();
            $table->string('phone_number', 20)->unique();
            $table->string('email', 50)->unique();
            $table->string('address', 255);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('roles');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('account_no')->references('account_no')->on('companies')->cascadeOnDelete()->cascadeOnUpdate();
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
