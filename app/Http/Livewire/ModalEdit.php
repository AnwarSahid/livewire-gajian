<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalEdit extends ModalComponent
{
    public function render()
    {
        return view('livewire.modal-edit');
    }
}
