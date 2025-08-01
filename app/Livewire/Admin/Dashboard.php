<?php

namespace App\Livewire\Admin;

use App\Models\Patient;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $patients = Patient::all();
        return view('livewire.admin.dashboard', compact('patients'));
    }
}
