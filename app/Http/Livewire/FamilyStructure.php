<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Family;

class FamilyStructure extends Component
{
    public $family_name, $relationship, $age, $job, $live_together, $agreement;

    public function render()
    {

        return view('livewire.family-structure');
    }

    public function store() 
    {
        $validatedData = $this->validate([
            'family_name' => 'required',
            'relationship' => 'required',
            'age' => 'required',
            'job' => 'required',
            'live_together' => 'required',
            'agreement' => 'required',
        ]);
  
        Family::create($validatedData);
  
        return redirect()->to('/entry');
    }
}
