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
        Schema::create('cpiform', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id');
            $table->string('email_add');
            $table->string('contact_number');
            $table->string('tel_number')->nullable();
            $table->string('current_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('ptc_name')->nullable();
            $table->string('ptc_contact')->nullable();
            $table->string('relationship_to_ptc')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_address')->nullable();
            $table->string('guardian_occupation')->nullable();
            $table->string('father_address')->nullable();
            $table->string('mother_address')->nullable();
            $table->string('father_contact')->nullable();
            $table->string('mother_contact')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('parents_relation_status')->nullable();
            $table->string('living_arrangement')->nullable();
            $table->integer('sibling_rank')->nullable();
            $table->string('sibling1_name')->nullable();
            $table->string('sibling1_sex')->nullable();
            $table->integer('sibling1_age')->nullable();
            $table->string('sibling1_school_comp')->nullable();
            $table->string('sibling2_name')->nullable();
            $table->string('sibling2_sex')->nullable();
            $table->integer('sibling2_age')->nullable();
            $table->string('sibling2_school_comp')->nullable();
            $table->string('sibling3_name')->nullable();
            $table->string('sibling3_sex')->nullable();
            $table->integer('sibling3_age')->nullable();
            $table->string('sibling3_school_comp')->nullable();
            // Define fields for other siblings similarly
            $table->string('elem_school')->nullable();
            $table->string('elem_achievements')->nullable();
            $table->string('secondary_school')->nullable();
            $table->string('secondary_achievements')->nullable();
            $table->string('tertiary_school')->nullable();
            $table->string('tertiary_achievements')->nullable();
            $table->string('current_health')->nullable();
            $table->string('physical_acts')->nullable();
            $table->boolean('under_doc_care')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('doc_reason')->nullable();
            $table->boolean('taking_medication')->nullable();
            $table->string('medication_reason')->nullable();
            $table->string('medicine')->nullable();
            $table->string('received_services')->nullable();
            $table->string('received_psych_services')->nullable();
            $table->string('course_choice1')->nullable();
            $table->string('course_choice2')->nullable();
            $table->string('course_choice3')->nullable();
            $table->string('course_factors')->nullable();
            $table->string('after_program')->nullable();
            $table->string('characteristics')->nullable();
            $table->string('skills')->nullable();
            $table->string('goals')->nullable();
            $table->string('photo')->nullable();
            $table->string('signature')->nullable();
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            // Assuming 'accounts' table exists and 'id' column in 'accounts' table is the primary key
            // If not, replace 'accounts' with the appropriate table name and 'id' with the appropriate column name
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpiform');
    }
};
