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
            $table->string('UUID', 20)->primary();
            $table->string('account_no', 10)->unique();
            $table->string('company_name', 50)->unique();
            $table->string('company_email', 50)->unique();
            $table->string('companys_phone_number', 20)->unique();
            $table->string('company_address', 255);
            $table->string('company_type', 50);
            $table->timestamps();
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
