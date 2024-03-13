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
        Schema::create('companies', function (Blueprint $table) {
            $table->string('UUID', 20)->primary()->unique();
            $table->string('account_no', 20)->unique();
            $table->string('company_name', 30)->unique();
            $table->string('company_phone_number', 20);
            $table->string('company_type')->unique();
            $table->string('company_email', 50)->unique();
            $table->timestamp('register_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
