<?php

namespace App\Livewire;

use Livewire\Component;

class Appointment extends Component
{
    public $time =[
        '08:00 AM',
        '09:00 AM',
        '10:00 AM',
        '11:00 AM',
        '12:00 PM',
        '13:00 PM',
        '14:00 PM',
        '15:00 PM',
        '16:00 PM',
    ];
    public $availTime = [];
    public $selectedDate = '';
    public $consultations =[ //Consultation to par ng counselor
        [
            'Date' => '03-01-2024',
            'Time' => '08:00 AM',
            'Name' => 'John Doe',
        ],
        [
            'Date' => '03-01-2024',
            'Time' => '09:00 AM',
            'Name' => 'John Doe',
        ],
        [
            'Date' => '03-01-2024',
            'Time' => '10:00 AM',
            'Name' => 'John Doe',
        ],
        [
            'Date' => '03-01-2024',
            'Time' => '11:00 AM',
            'Name' => 'John Doe',
        ],
        [
            'Date' => '03-01-2024',
            'Time' => '12:00 PM',
            'Name' => 'Jane Doe',
        ],
        [
            'Date' => '05-02-2024',
            'Time' => '09:00 AM',
            'Name' => 'Jane Doe',
        ],
        [
            'Date' => '05-02-2024',
            'Time' => '10:00 AM',
            'Name' => 'Jane Doe',
        ]
    ];  
    public function avail(){
        $this->availTime = [];
        $selectedDate = $this->selectedDate; // Assign the value of $this->selectedDate to $selectedDate
        foreach($this->time as $time){
            $this->availTime[] = $time;
        }
        foreach($this->consultations as $consultation){
            if($consultation['Date'] == $selectedDate){
                $this->availTime = array_diff($this->availTime, [$consultation['Time']]);
            }
        }
    }
    public function render()
    {
        return view('livewire.appointment');
    }
}
