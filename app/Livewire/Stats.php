<?php

namespace App\Livewire;

use Livewire\Component;

class Stats extends Component
{
    public $gender = [
        ['Gender'=> 'Male', 'Value' => 43], 
        ['Gender'=> 'Female', 'Value' => 12],
    ];
    public $Account_type = [
        ['Account_type'=> 'Student', 'Value' => 10], 
        ['Account_type'=> 'Employee', 'Value' => 12],
    ];
    public $colleges = [
        ["College" => "CED", "Value" => 10],
        ["College" => "CA", "Value" => 12],
        ["College" => "CPA", "Value" => 10],
        ["College" => "CBA", "Value" => 12],
        ["College" => "CE", "Value" => 10],
        ["College" => "CISTM", "Value" => 12],
        ["College" => "CPT", "Value" => 10],
        ["College" => "CN", "Value" => 12],
        ["College" => "CHASS", "Value" => 10],
        ["College" => "CS", "Value" => 0],
        ["College" => "CASBE", "Value" => 0],
        ["College" => "CTHM", "Value" => 0],
        ["College" => "CL", "Value" => 0],
        ["College" => "CM", "Value" => 0],
        ["College" => "Graduate School of Engineering", "Value" => 10]
    ];
    public function render()
    {
        return view('livewire.stats');
    }
}