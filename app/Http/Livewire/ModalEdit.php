<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ModalEdit extends ModalComponent
{


    public $name_project;
    public $location_project;
    public $time_start;
    public $time_end;

    public function render()
    {
        return view('livewire.modal-edit');
    }

    public function update()
    {
        $this->validate([
            'name_project' => 'required',
            'location_project' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
        ]);

        Project::update([
            // 'user_id' => Auth::user()->id,
            'name_project' => $this->name_project,
            'location_project' => $this->location_project,
            'time_start' => $this->time_start,
            'time_end' => $this->time_end
        ]);

        session()->flash('succes', 'Upload Data Success.');
        return redirect()->to('/job');
    }
}
