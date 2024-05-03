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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('student_number');
            $table->string('contact_number');
            $table->string('counsellor');
            $table->string('setup');
            $table->string('guardian_name');
            $table->string('relationship_to_guardian');
            $table->string('guardian_contact');
            $table->string('course');
            $table->string('email');
            $table->string('college');
            $table->date('date');
            $table->time('time');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
