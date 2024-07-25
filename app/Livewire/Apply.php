<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\LivewireFilepond\WithFilePond;

class Apply extends Component
{   
    use WithFilePond;

    public $file;

    public function render()
    {
        return view('livewire.apply');
    }
}
