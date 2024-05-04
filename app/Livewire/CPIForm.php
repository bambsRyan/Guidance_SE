<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Accounts;
use App\Models\CPI;

class CPIForm extends Component
{
    public $account_id;
    public $email_add;
    public $contact_number;
    public $tel_number;
    public $current_address;
    public $permanent_address;
    public $father_name;
    public $mother_name;
    public $ptc_name;
    public $ptc_contact;
    public $relationship_to_ptc;
    public $guardian_name;
    public $guardian_address;
    public $guardian_contact;
    public $guardian_occupation;
    public $father_address;
    public $mother_address;
    public $father_contact;
    public $mother_contact;
    public $father_occupation;
    public $mother_occupation;
    public $parents_relation_status;
    public $living_arrangement;
    public $sibling_rank;
    public $sibling1_name;
    public $sibling1_sex;
    public $sibling1_age;
    public $sibling1_school_comp;
    public $sibling2_name;
    public $sibling2_sex;
    public $sibling2_age;
    public $sibling2_school_comp;
    public $sibling3_name;
    public $sibling3_sex;
    public $sibling3_age;
    public $sibling3_school_comp;
    public $elem_school;
    public $elem_achievements;
    public $secondary_school;
    public $secondary_achievements;
    public $tertiary_school;
    public $tertiary_achievements;
    public $other_school;
    public $other_achievements;
    public $current_health;
    public $physical_acts;
    public $under_doc_care;
    public $doc_reason;
    public $taking_medication;
    public $medication_reason;
    public $medicine;
    public $received_services;
    public $received_psych_services;
    public $course_choice1;
    public $course_choice2;
    public $course_choice3;
    public $course_factors = [];
    public $after_program;
    public $characteristics;
    public $skills;
    public $goals;
    public $photo;
    public $signature;
    public $studentId;
    public $account_status;

    public function saveFormData()
    {

        CPI::create([
            'account_id' => $this->studentId,
            'email_add' => $this->email_add,
            'contact_number' => $this->contact_number,
            'tel_number' => $this->tel_number,
            'current_address' => $this->current_address,
            'permanent_address' => $this->permanent_address,
            'father_name' => $this->father_name,
            'mother_name' => $this->mother_name,
            'ptc_name' => $this->ptc_name,
            'ptc_contact' => $this->ptc_contact,
            'relationship_to_ptc' => $this->relationship_to_ptc,
            'guardian_name' => $this->guardian_name,
            'guardian_address' => $this->guardian_address,
            'guardian_contact' => $this->guardian_contact,
            'guardian_occupation' => $this->guardian_occupation,
            'father_address' => $this->father_address,
            'mother_address' => $this->mother_address,
            'father_contact' => $this->father_contact,
            'mother_contact' => $this->mother_contact,
            'father_occupation' => $this->father_occupation,
            'mother_occupation' => $this->mother_occupation,
            'parents_relation_status' => $this->parents_relation_status,
            'living_arrangement' => $this->living_arrangement,
            'sibling_rank' => $this->sibling_rank,
            'sibling1_name' => $this->sibling1_name,
            'sibling1_sex' => $this->sibling1_sex,
            'sibling1_age' => $this->sibling1_age,
            'sibling1_school_comp' => $this->sibling1_school_comp,
            'sibling2_name' => $this->sibling2_name,
            'sibling2_sex' => $this->sibling2_sex,
            'sibling2_age' => $this->sibling2_age,
            'sibling2_school_comp' => $this->sibling2_school_comp,
            'sibling3_name' => $this->sibling3_name,
            'sibling3_sex' => $this->sibling3_sex,
            'sibling3_age' => $this->sibling3_age,
            'sibling3_school_comp' => $this->sibling3_school_comp,
            'elem_school' => $this->elem_school,
            'elem_achievements' => $this->elem_achievements,
            'secondary_school' => $this->secondary_school,
            'secondary_achievements' => $this->secondary_achievements,
            'tertiary_school' => $this->tertiary_school,
            'tertiary_achievements' => $this->tertiary_achievements,
            'other_school' => $this->other_school,
            'other_achievements' => $this->other_achievements,
            'current_health' => $this->current_health,
            'physical_acts' => $this->physical_acts,
            'under_doc_care' => $this->under_doc_care,
            'doc_reason' => $this->doc_reason,
            'taking_medication' => $this->taking_medication,
            'medication_reason' => $this->medication_reason,
            'medicine' => $this->medicine,
            'received_services' => $this->received_services,
            'received_psych_services' => $this->received_psych_services,
            'course_choice1' => $this->course_choice1,
            'course_choice2' => $this->course_choice2,
            'course_choice3' => $this->course_choice3,
            //  'course_factors' => $this->course_factors,
            'after_program' => $this->after_program,
            'characteristics' => $this->characteristics,
            'skills' => $this->skills,
            'goals' => $this->goals,
            'photo' => $this->photo,
            'signature' => $this->signature,
        ]);

        // Update account_status in the Accounts model
        $account = Accounts::where('student_id', '202021212')->first();
        if ($account) {
            $account->account_status = 'old';
            $account->save();
        }

        return redirect('/student_Dashboard');
    }




    public function render()
    {
        $account = Accounts::where('student_id', '202021212')->first();
        $this->studentId = $account->student_id;
        $this->email_add = $account->email_address;
        return view('livewire.c-p-i-form', compact('account'));
    }
}
