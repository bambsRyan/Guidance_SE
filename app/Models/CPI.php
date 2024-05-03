<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CPI extends Model
{
    use HasFactory;

    protected $table = 'cpiform';

    protected $fillable = [
        'account_id',
        'email_add',
        'contact_number',
        'tel_number',
        'current_address',
        'permanent_address',
        'father_name',
        'mother_name',
        'ptc_name',
        'ptc_contact',
        'relationship_to_ptc',
        'guardian_name',
        'guardian_address',
        'guardian_occupation',
        'father_address',
        'mother_address',
        'father_contact',
        'mother_contact',
        'father_occupation',
        'mother_occupation',
        'parents_relation_status',
        'living_arrangement',
        'sibling_rank',
        'sibling1_name',
        'sibling1_sex',
        'sibling1_age',
        'sibling1_school_comp',
        'sibling2_name',
        'sibling2_sex',
        'sibling2_age',
        'sibling2_school_comp',
        'sibling3_name',
        'sibling3_sex',
        'sibling3_age',
        'sibling3_school_comp',
        'elem_school',
        'elem_achievements',
        'secondary_school',
        'secondary_achievements',
        'tertiary_school',
        'tertiary_achievements',
        'current_health',
        'physical_acts',
        'under_doc_care',
        'doctor_name',
        'doc_reason',
        'taking_medication',
        'medication_reason',
        'medicine',
        'received_services',
        'received_psych_services',
        'course_choice1',
        'course_choice2',
        'course_choice3',
        'course_factors',
        'after_program',
        'characteristics',
        'skills',
        'goals',
        'photo',
        'signature',
    ];
}
