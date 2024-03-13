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
            $table->id();
            $table->string('account_no', 20);
            $table->string('fullname', 30)->unique();
            $table->string('phone_number', 20);
            $table->string('email', 50)->unique();
            $table->string('address', 255);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('terms_condition');
            $table->string('company_id', 20);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('company_id')->references('UUID')->on('companies');
            $table->foreign('account_no')->references('account_no')->on('companies');
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
