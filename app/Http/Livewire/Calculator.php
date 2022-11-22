<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $name = 'Taylor';

    public function render()
    {
        return view('livewire.calculator');
    }
}
