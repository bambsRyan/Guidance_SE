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
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->string('appointment_number');
            $table->unsignedBigInteger('request_id');
            $table->date('date');
            $table->time('time');
            $table->string('meeting_link')->nullable();
            $table->unsignedBigInteger('counselor_id');
            $table->text('note')->nullable();
            $table->string('status')->nullable();
            $table->foreign('request_id')->references('id')->on('requests')->onDelete('cascade');
            $table->foreign('counselor_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
