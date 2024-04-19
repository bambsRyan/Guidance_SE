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
        Schema::create('counselee', function (Blueprint $table) {
            $table->unsignedBigInteger('account_id');
            $table->string('email_add');
            $table->string('contact_number');
            $table->string('tel_number');
            $table->string('Current_address')->nullable();
            $table->string('Permanent_address')->nullable();
            $table->string('Father_Name')->nullable();
            $table->string('Mother_Name')->nullable();
            $table->string('PTC_Name')->nullable();
            $table->string('PTC_Contact')->nullable();
            $table->string('Relationship_to_PTC')->nullable();
            $table->string('Guardian_Name')->nullable();
            $table->string('Guardian_Address')->nullable();
            $table->string('Guardian_Occupation')->nullable();
            $table->string('Father_Address')->nullable();
            $table->string('Mother_Address')->nullable();
            $table->string('Father_Contact')->nullable();
            $table->string('Mother_Contact')->nullable();
            $table->string('Father_Occupation')->nullable();
            $table->string('Mother_Occupation')->nullable();
            $table->string('Parents_Relation_Status')->nullable();
            $table->string('Living_Arrangement')->nullable();
            $table->string('Sibling_Rank')->nullable();
            // Add more columns as needed
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counselee');
    }
};
