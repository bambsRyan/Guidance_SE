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
        Schema::create('refers', function (Blueprint $table) {
            $table->id();
            $table->string('referal_number');
            $table->unsignedBigInteger('referred_by_id');
            $table->unsignedBigInteger('referral_id');
            $table->string('reason')->nullable();
            $table->date('date_referred')->nullable();
            $table->text('note')->nullable();
            $table->string('status')->nullable();
            $table->foreign('referred_by_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('referral_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refers');
    }
};
