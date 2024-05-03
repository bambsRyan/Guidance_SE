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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('position')->nullable();
            $table->string('college')->nullable();
            $table->string('course')->nullable();
            $table->string('sex');
            $table->integer('age');
            $table->date('birthdate');
            $table->string('religion')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('email_address')->unique();
            $table->string('password');
            $table->string('account_status')->default('new');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
