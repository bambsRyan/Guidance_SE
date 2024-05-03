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
    public $current_health;
    public $physical_acts;
    public $under_doc_care;
    public $doctor_name;
    public $doc_reason;
    public $taking_medication;
    public $medication_reason;
    public $medicine;
    public $received_services;
    public $received_psych_services;
    public $course_choice1;
    public $course_choice2;
    public $course_choice3;
    public $course_factors;
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
            'contact_number' => $this->contact_number

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
