<div class="h-screen w-screen flex flex-col">
    @livewire('Topnavbar')
    <div id="tab" class="flex-1 h-full flex-col items-center justify-center">
        <div id="child" class="hidden flex-col items-center w-full p-2">
            <div class="flex justify-center w-4/5 h-12 items-center bg-slate-200 border rounded-xl">
                <span class="text-2xl">
                    PERSONAL INFORMATION
                </span>
            </div>
            <div class="w-4/5 mt-8 bg-stone-100 rounded-md">
                <div class="w-full">
                    <div class="flex m-4 justify-center">
                        <div class="flex w-full flex-col gap-2">
                            <div class="flex w-full gap-12 justify-center pl-20 pr-32">
                                <span class="w-full">
                                    <label for="college">College:</label>
                                    <input type="text" id="college" class="input h-10 input-bordered w-full max-w-sm my-1" value="{{ $account->college }}" readonly />
                                </span>
                                <span class="w-full">
                                    <label for="course">Course:</label>
                                    <input type="text" id="course" class="input h-10 input-bordered w-full max-w-sm my-1" value="{{ $account->course }}" readonly />
                                </span>
                                <span class="w-full">
                                    <label for="student_no">Student ID:</label>
                                    <input type="text" id="student_no" class="input h-10 input-bordered w-full max-w-sm my-1" value="{{ $account->student_id }}" readonly />
                                </span>
                            </div>
                            <div class="flex w-full gap-10 justify-center pl-20 pr-32">
                                <span class="w-full">
                                    <label for="sex">Sex:</label>
                                    <input type="text" id="sex" class="input h-10 input-bordered w-full max-w-sm my-1" value="{{ $account->sex }}" readonly />
                                </span>
                                <span class="w-full">
                                    <label for="bd">Birth Date:</label>
                                    <input type="text" id="bd" class="input h-10 input-bordered w-full max-w-sm my-1" value="{{ $account->birthdate }}" readonly />
                                </span>
                                <span class="w-full">
                                    <label for="religion">Religion:</label>
                                    <input type="text" id="religion" class="input h-10 input-bordered w-full max-w-sm my-1" value="{{ $account->religion }}" readonly />
                                </span>
                            </div>
                            <div class="flex w-full gap-10 justify-between px-20">
                                <span class="w-full">
                                    <label for="civil_status">Civil Status:</label>
                                    <input type="text" id="civil_status" class="input h-10 input-bordered w-full max-w-lg my-1" value="{{ $account->civil_status }}" readonly />
                                </span>
                                <span class="w-full">
                                    <label for="email">Email Address:</label>
                                    <input type="email" id="email" class="input h-10 input-bordered w-full max-w-lg my-1" value="{{ $account->email_address }}" readonly />
                                </span>
                            </div>
                            <div class="flex w-full gap-10 justify-between px-20">
                                <span class="w-full">
                                    <label for="tel_no">Telephone Number:</label>
                                    <input type="tel" id="tel_no" class="input h-10 input-bordered w-full max-w-lg my-1" wire:model="tel_number" />
                                </span>
                                <span class="w-full">
                                    <label for="mob_num">Mobile Phone Number</label>
                                    <input type="tel" id="mob_num" class="input h-10 input-bordered w-full max-w-lg my-1" wire:model="contact_number" />
                                </span>
                            </div>
                            <div class="flex w-full gap-10 justify-between px-20">
                                <span class="w-full">
                                    <label for="present_add">Present Address:</label>
                                    <input type="text" id="present_add" class="input h-10 input-bordered w-full max-w-lg my-1" wire:model="current_address" />
                                </span>
                                <span class="w-full">
                                    <label for="permanent_add">Permanent Address:</label>
                                    <input type="text" id="permanent_add" class="input h-10 input-bordered w-full max-w-lg my-1" wire:model="permanent_address" />
                                </span>
                            </div>
                            <div class="flex w-full gap-10 justify-center pl-20 pr-32">
                                <span class="w-full">
                                    <label for="contact_person">Contact Person in case of Emergency:</label>
                                    <input type="text" id="contact_person" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="ptc_name" />
                                </span>
                                <span class="w-full">
                                    <label for="rel_to_counselee">Relationship to the Counselee:</label>
                                    <input type="text" id="rel_to_counselee" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="relationship_to_ptc" />
                                </span>
                                <span class="w-full">
                                    <label for="contact">Contact Number:</label>
                                    <input type="text" id="contact" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="ptc_contact" />
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="child" class="hidden flex-col items-center w-full p-2">
            <div class="flex justify-center w-4/5 h-12 items-center bg-slate-200 border rounded-xl">
                <span class="text-2xl">
                    FAMILY BACKGROUND
                </span>
            </div>
            <div class="w-4/5">
                <div class="w-full">
                    <div class="flex m-4 justify-center">
                        <div class="flex w-full flex-col gap-2 justify-center items-center">
                            <div class="flex w-full gap-10 justify-center">
                                <span class="w-72">
                                    <label for="father">Father's Name:</label>
                                    <input type="text" id="father" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="father_name" />
                                </span>
                                <span class="w-72">
                                    <label for="father_address">Father's Address:</label>
                                    <input type="text" id="father_address" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="father_address" />
                                </span>
                                <span class="w-72">
                                    <label for="father_contact_number">Contact Number:</label>
                                    <input type="tel" id="father_contact_number" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="father_contact" />
                                </span>
                                <span class="w-72">
                                    <label for="father_occupation">Occupation:</label>
                                    <input type="text" id="father_occupation" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="father_occupation" />
                                </span>
                            </div>
                            <div class="flex w-full gap-10 justify-center">
                                <span class="w-72">
                                    <label for="mother">Mother's Name:</label>
                                    <input type="text" id="mother" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="mother_name" />
                                </span>
                                <span class="w-72">
                                    <label for="mother_address">Mother's Address:</label>
                                    <input type="text" id="mother_address" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="mother_address" />
                                </span>
                                <span class="w-72">
                                    <label for="mother_contact_number">Contact Number:</label>
                                    <input type="tel" id="mother_contact_number" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="mother_contact" />
                                </span>
                                <span class="w-72">
                                    <label for="mother_occupation">Occupation:</label>
                                    <input type="text" id="mother_occupation" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="mother_occupation" />
                                </span>
                            </div>
                            <div class="flex w-full gap-10 justify-center">
                                <span class="w-72">
                                    <label for="guardian">Guardian's Name:</label>
                                    <input type="text" id="guardian" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="guardian_name" />
                                </span>
                                <span class="w-72">
                                    <label for="guardian_address">Address:</label>
                                    <input type="text" id="guardian_address" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="guardian_address" />
                                </span>
                                <span class="w-72">
                                    <label for="guardian_contact_number">Contact Number:</label>
                                    <input type="tel" id="guardian_contact_number" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="guardian_contact" />
                                </span>
                                <span class="w-72">
                                    <label for="guardian_occupation">Occupation:</label>
                                    <input type="text" id="guardian_occupation" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="guardian_occupation" />
                                </span>
                            </div>
                            <div class="flex w-full justify-between px-6">
                                <span class="w-72">
                                    <label class="form-control w-full max-w-xs">
                                        <div class="label">
                                            <span>Parent's Relationship Status</span>
                                        </div>
                                        <select class="select select-bordered" wire:model="parents_relation_status">
                                            <option disabled selected>Pick one</option>
                                            <option>Living Together</option>
                                            <option>Separated</option>
                                            <option>Father OFW</option>
                                            <option>Mother OFW</option>
                                        </select>
                                    </label>
                                </span>
                                <span class="w-72">
                                    <label class="form-control w-full max-w-xs">
                                        <div class="label">
                                            <span>Living Arrangement</span>
                                        </div>
                                        <select class="select select-bordered " wire:model="living_arrangement">
                                            <option disabled selected>Pick one</option>
                                            <option>With both parents</option>
                                            <option>with one parent</option>
                                            <option>with relative</option>
                                            <option>Dormitory/Appartment</option>
                                        </select>
                                    </label>
                                </span>
                                <span class="w-72">
                                    <label class="form-control w-full max-w-xs">
                                        <div class="label">
                                            <span>Sibling Rank:</span>
                                        </div>
                                        <select class="select select-bordered " wire:model="sibling_rank">
                                            <option disabled selected>Pick one</option>
                                            <option>1st</option>
                                            <option>2nd</option>
                                            <option>3rd</option>
                                            <option>4th</option>
                                            <option>5th</option>
                                            <option>Higher</option>
                                        </select>
                                    </label>
                                </span>
                            </div>
                            <div class="flex justify-center w-4/5 h-6 items-center bg-slate-200 border rounded-xl mt-2">
                                <span class="text-lg">
                                    Sibling's/Child/ren's Name (Eldest to Youngest)
                                </span>
                            </div>
                            <div class="flex w-full gap-10 justify-center">
                                <span class="w-72">
                                    <label for="name_1">Name:</label>
                                    <input type="text" id="name_1" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="sibling1_name" />
                                </span>
                                <span class="w-72">
                                    <label class="form-control w-full max-w-xs">
                                        <div class="label p-0 my-0.5">
                                            <span>Sex:</span>
                                        </div>
                                        <select class="select select-bordered select-sm h-10" wire:model="sibling1_sex">
                                            <option disabled selected>Pick one</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </label>
                                </span>
                                <span class="w-72">
                                    <label for="age_1">Age:</label>
                                    <input type="number" id="age_1" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="sibling1_age" />
                                </span>
                                <span class="w-72">
                                    <label for="school_company">School/Company:</label>
                                    <input type="text" id="school_company" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="sibling1_school_comp" />
                                </span>
                            </div>
                            <div class="flex w-full gap-10 justify-center">
                                <span class="w-72">
                                    <label for="name_2">Name:</label>
                                    <input type="text" id="name_2" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="sibling2_name" />
                                </span>
                                <span class="w-72">
                                    <label class="form-control w-full max-w-xs">
                                        <div class="label p-0 my-0.5">
                                            <span>Sex:</span>
                                        </div>
                                        <select class="select select-bordered select-sm h-10 " wire:model="sibling2_sex">
                                            <option disabled selected>Pick one</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </label>
                                </span>
                                <span class="w-72">
                                    <label for="age_2">Age:</label>
                                    <input type="number" id="age_2" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="sibling2_age" />
                                </span>
                                <span class="w-72">
                                    <label for="school_company_2">School/Company:</label>
                                    <input type="text" id="school_company_2" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="sibling2_school_comp" />
                                </span>
                            </div>
                            <div class="flex w-full gap-10 justify-center">
                                <span class="w-72">
                                    <label for="name_3">Name:</label>
                                    <input type="text" id="name_3" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="sibling3_name" />
                                </span>
                                <span class="w-72">
                                    <label class="form-control w-full max-w-xs">
                                        <div class="label p-0 my-0.5">
                                            <span>Sex:</span>
                                        </div>
                                        <select class="select select-bordered select-sm h-10" wire:model="sibling3_sex">
                                            <option disabled selected>Pick one</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </label>
                                </span>
                                <span class="w-72">
                                    <label for="age_3">Age:</label>
                                    <input type="number" id="age_3" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="sibling3_age">
                                </span>
                                <span class="w-72">
                                    <label for="school_company_3">School/Company:</label>
                                    <input type="text" id="school_company_3" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="sibling3_school_comp">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="child" class="hidden flex-col items-center justify-center p-2 ">
            <div class="flex justify-center w-4/5 h-12 items-center bg-slate-200 border rounded-xl mb-10">
                <span class="text-2xl">
                    Academic Background
                </span>
            </div>
            <div class="w-full flex flex-col gap-3 mx-20 items-center">
                <div class="flex w-4/5 justify-center gap-4 items-center bg-slate-100 p-2">
                    <span class="w-96">
                        <label for="elementary">Elementary School:</label>
                        <input type="text" id="elementary" class="input h-10 input-bordered w-full max-w-lg my-1" wire:model="elem_school" />
                    </span>
                    <span class="w-max">
                        <label for="acad_elem" class="text-sm">Academic & Extra-Curricular Awards/Citations Received/Membership in Organizations:</label>
                        <textarea id="acad_elem" class="textarea textarea-bordered w-full" wire:model="elem_achievements"></textarea>
                    </span>
                </div>
                <div class="flex w-4/5 justify-center items-center gap-4 bg-slate-100 p-2">
                    <span class="w-96">
                        <label for="secondary">Secondary School:</label>
                        <input type="text" id="secondary" class="input h-10 input-bordered w-full max-w-lg my-1" wire:model="secondary_school" />
                    </span>
                    <span class="w-max">
                        <label for="acad_second" class="text-sm">Academic & Extra-Curricular Awards/Citations Received/Membership in Organizations:</label>
                        <textarea id="acad_second" class="textarea textarea-bordered w-full" wire:model="secondary_achievements"></textarea>
                    </span>
                </div>
                <div class="flex w-4/5 justify-center items-center gap-4 bg-slate-100 p-2">
                    <span class="w-96">
                        <label for="tertiary">Tertiary School:</label>
                        <input type="text" id="tertiary" class="input h-10 input-bordered w-full max-w-lg my-1" wire:model="tertiary_school" />
                    </span>
                    <span class="w-max">
                        <label for="acad_third" class="text-sm">Academic & Extra-Curricular Awards/Citations Received/Membership in Organizations:</label>
                        <textarea id="acad_third" class="textarea textarea-bordered w-full" wire:model="tertiary_achievements"></textarea>
                    </span>
                </div>
                <div class="flex w-4/5 justify-center items-center gap-4 bg-slate-100 p-2">
                    <span class="w-96">
                        <label for="others">Others:</label>
                        <input type="text" id="others" class="input h-10 input-bordered w-full max-w-lg my-1" wire:model="other_school" />
                    </span>
                    <span class="w-max">
                        <label for="acad_other" class="text-sm">Academic & Extra-Curricular Awards/Citations Received/Membership in Organizations:</label>
                        <textarea id="acad_other" class="textarea textarea-bordered w-full" wire:model="other_achievements"></textarea>
                    </span>
                </div>
            </div>
        </div>
        <div id="child" class="hidden flex-col items-center w-full p-2 mb-4">
            <div class="flex justify-center w-4/5 h-12 items-center bg-slate-200 border rounded-xl mb-10">
                <span class="text-2xl">
                    Physical Health Information
                </span>
            </div>
            <div class="w-full flex flex-col gap-10 items-center">
                <div class="flex w-4/5 justify-between items-center bg-slate-100 p-2">
                    <span class="w-max">
                        <label class="form-control w-full">
                            <div class="label h-12">
                                <span>Rate current physical health</span>
                            </div>
                            <select class="select select-bordered w-full" wire:model="current_health">
                                <option disabled selected>Pick one</option>
                                <option>Poor</option>
                                <option>Good</option>
                                <option>Unsatisfactory</option>
                                <option>Satisfactory</option>
                                <option>Excellent</option>
                            </select>
                        </label>
                    </span>
                    <span class="w-max">
                        <label class="form-control w-full">
                            <div class="label h-12">
                                <span>Do you engage in a physical activity or exercise?</span>
                            </div>
                            <select class="select select-bordered" wire:model="physical_acts">
                                <option disabled selected>Pick one</option>
                                <option>Not at All</option>
                                <option>Occassionally</option>
                                <option>Regularly</option>
                            </select>
                        </label>
                    </span>
                    <span class="w-max">
                        <label class="form-control w-full">
                            <div class="label h-12">
                                <span>Are you presently under a doctor's care?</span>
                            </div>
                            <select class="select select-bordered " wire:model="under_doc_care">
                                <option disabled selected>Pick one</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </label>
                    </span>
                    <span class="w-max">
                        <div class="label h-12">
                            <span for="reason">Reason for Doctor Care:</span>
                        </div>
                        <input type="text" id="reason" class="input h-10 input-bordered w-full max-w-lg my-1" wire:model="doc_reason" />
                    </span>
                </div>
                <div class="flex w-4/5 justify-between items-center bg-slate-100 p-2">
                    <span class="w-max">
                        <label class="form-control w-full">
                            <div class="label">
                                <span>Are you presently taking any medication?</span>
                            </div>
                            <select class="select select-bordered" wire:model="taking_medication">
                                <option disabled selected>Pick one</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </label>
                    </span>
                    <span class="w-max">
                        <div class="label h-12">
                            <span for="reason_med">If yes, reason of medication:</span>
                        </div>
                        <input type="text" id="reason_med" class="input h-10 input-bordered w-96 max-w-lg" wire:model="medication_reason" />
                    </span>
                    <span class="w-max">
                        <div class="label h-12">
                            <span for="meds">What kind of medicine?:</span>
                        </div>
                        <input type="text" id="reason_meds" class="input h-10 input-bordered w-96  max-w-lg" wire:model="medicine" />
                    </span>
                </div>
                <div class="flex w-4/5 gap-4 justify-between items-center bg-slate-100 p-2">
                    <span class="w-max">
                        <label class="form-control w-full">
                            <div class="label h-20">
                                <span>Have you ever received any psychological or counseling services?</span>
                            </div>
                            <select class="select select-bordered" wire:model="received_services">
                                <option disabled selected>Pick one</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </label>
                    </span>
                    <span class="w-max">
                        <div class="label h-20">
                            <span for="reason_2">If yes, specify:</span>
                        </div>
                        <input type="text" id="reason_2" class="input h-10 input-bordered w-72" wire:model="received_psych_services" />
                    </span>
                    <span class="w-max">
                        <label class="form-control w-full">
                            <div class="label h-20">
                                <span>Are you currently receiving any psychological services?</span>
                            </div>
                            <select class="select select-bordered" wire:model="received_psych_services">
                                <option disabled selected>Pick one</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </label>
                    </span>
                    <span class="w-max">
                        <div class="label h-20">
                            <span for="reason_3">If yes, specify:</span>
                        </div>
                        <input type="text" id="reason_3" class="input h-10 input-bordered w-72" wire:model="sibling3_school_comp" />
                    </span>
                </div>
            </div>
        </div>
        <div id="child" class="hidden flex-col items-center justify-center p-2">
            <div class="flex justify-center w-4/5 h-12 items-center bg-slate-200 border rounded-xl mb-10">
                <span class="text-2xl">
                    Career Related Information
                </span>
            </div>
            <div class="w-full flex flex-col justify-center items-center mb-4">
                <div class="w-4/5 mb-2 text-start">
                    <strong>What courses did you consider when you applied at PLM? (for undergraduate programs only)</strong>
                </div>
                <div class="flex w-4/5 gap-12 justify-center">
                    <span class="w-full">
                        <label for="choice_1">1st Choice:</label>
                        <input type="text" id="choice_1" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="course_choice1" />
                    </span>
                    <span class="w-full">
                        <label for="choice_2">2nd Choice:</label>
                        <input type="text" id="choice_2" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="course_choice2" />
                    </span>
                    <span class="w-full">
                        <label for="choice_3">3rd Choice:</label>
                        <input type="text" id="choice_3" class="input h-10 input-bordered w-full max-w-sm my-1" wire:model="course_choice3" />
                    </span>
                </div>
            </div>
            <div class="w-full flex flex-col justify-center items-center">
                <div class="w-4/5 mb-2 text-start">
                    <strong>What factors influenced you in choosing the course you are taking? (check those that apply to you)</strong>
                </div>
                <div class="flex w-4/5 gap-12 justify-between bg-slate-100 p-3 rounded-md">
                    <div class="form-control">
                        <label class="cursor-pointer justify-start label  gap-2">
                            <input type="checkbox" class="checkbox checkbox-neutral" />
                            <span class="label-text">Financial Secuity</span>
                        </label>
                        <label class="cursor-pointer justify-start label gap-2">
                            <input type="checkbox" class="checkbox checkbox-neutral" />
                            <span class="label-text">Job Availability</span>
                        </label>
                        <label class="cursor-pointer justify-start label gap-2">
                            <input type="checkbox" class="checkbox checkbox-neutral" />
                            <span class="label-text">Parent's Choice</span>
                        </label>
                        <label class="cursor-pointer justify-start label gap-2">
                            <input type="checkbox" class="checkbox checkbox-neutral" />
                            <span class="label-text">Helping Society/others</span>
                        </label>
                        <label class="cursor-pointer justify-start label gap-2">
                            <input type="checkbox" class="checkbox checkbox-neutral" />
                            <span class="label-text">Helping Society/others</span>
                        </label>
                    </div>
                    <div class="form">
                        <label class="cursor-pointer justify-start label gap-2">
                            <input type="checkbox" class="checkbox checkbox-neutral" />
                            <span class="label-text">Status/Recognition</span>
                        </label>
                        <label class="cursor-pointer justify-start label gap-2">
                            <input type="checkbox" class="checkbox checkbox-neutral" />
                            <span class="label-text">Creativity</span>
                        </label>
                        <label class="cursor-pointer justify-start label gap-2">
                            <input type="checkbox" class="checkbox checkbox-neutral" />
                            <span class="label-text">Independence</span>
                        </label>
                        <label class="cursor-pointer justify-start label gap-2">
                            <input type="checkbox" class="checkbox checkbox-neutral" />
                            <span class="label-text">More Fulfillment</span>
                        </label>
                        <label class="cursor-pointer justify-start label gap-2">
                            <input type="checkbox" class="checkbox checkbox-neutral" />
                            <span class="label-text">others</span>
                        </label>
                    </div>
                    <div class="form">
                        <label class="cursor-pointer justify-start label gap-2">
                            <input type="checkbox" class="checkbox checkbox-neutral" />
                            <span class="label-text">Competition/Challenge/Adventure</span>
                        </label>
                        <label class="cursor-pointer justify-start label gap-2">
                            <input type="checkbox" class="checkbox checkbox-neutral" />
                            <span class="label-text">Leisure/Enjoyment</span>
                        </label>
                        <label class="cursor-pointer justify-start label gap-2">
                            <input type="checkbox" class="checkbox checkbox-neutral" />
                            <span class="label-text">Peer Influenced</span>
                        </label>
                        <label class="cursor-pointer justify-start label gap-2">
                            <input type="checkbox" class="checkbox checkbox-neutral" />
                            <span class="label-text">Pursuit of Knowledge</span>
                        </label>
                    </div>
                </div>
                <div class="flex w-4/5  justify-center ">
                    <span class="w-full my-2 ">
                        <label for="how"><strong> How do you see yourself a year after finishing your program? 5 years after finishing your program?</strong></label>
                        <textarea id="how" class="textarea textarea-bordered w-full my-2" wire:model="after_program"></textarea>
                    </span>
                </div>
            </div>
        </div>
        <div id="child" class="hidden flex-col items-center justify-center p-2">
            <div class="flex justify-center w-4/5 h-12 items-center bg-slate-200 border rounded-xl mb-10">
                <span class="text-2xl">
                    More About OneSelf
                </span>
            </div>
            <div class="rounded-lg flex flex-col w-4/5 justify-center items-center mb-4 bg-slate-100">
                <div class="flex w-4/5  justify-center ">
                    <span class="w-full my-2 ">
                        <label for="char" class="">Characteristics that best describe oneself:</label>
                        <textarea id="char" class="textarea textarea-bordered w-full my-2" wire:model="characteristics"></textarea>
                    </span>
                </div>
                <div class="flex w-4/5  justify-center ">
                    <span class="w-full my-2 ">
                        <label for="skills" class="">Special Skills/Talents/Hobbies/Special Interests:</label>
                        <textarea id="skills" class="textarea textarea-bordered w-full my-2" wire:model="skills"></textarea>
                    </span>
                </div>
                <div class="flex w-4/5  justify-center ">
                    <span class="w-full my-2 ">
                        <label for="ambitions" class="">Ambitions/Goals:</label>
                        <textarea id="ambitions" class="textarea textarea-bordered w-full my-2" wire:model="goals"></textarea>
                    </span>
                </div>
            </div>
        </div>
        <div class="flex-1 flex justify-center items-center w-full flex-col">
            <div class="flex w-full justify-center">
                <input type="submit" id="prev" value="Prev" class="btn btn-outline mx-80">
                <button id="next2" class="hidden btn btn-outline mx-80">Next</button>
                <input wire:click="saveFormData" type="submit" id="next" value="Submit" class="hidden btn btn-outline mx-80">
            </div>
        </div>
    </div>
</div>