<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Accounts;

class Topnavbar extends Component
{
    public function render()
    {
        $account = Accounts::where('student_id', '202021212')->first();
        return view('livewire.topnavbar', compact('account'));
    }
}
