<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class CreateProject extends Component
{

    public $name_project;
    public $location_project;
    public $time_start;
    public $time_end;
    public function render()
    {
        return view('livewire.create-project');
    }

    public function create()
    {
        $this->validate([
            'name_project' => 'required',
            'location_project' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
        ]);
        Project::create([
            'user_id' => Auth::user()->id,
            'name_project' => $this->name_project,
            'location_project' => $this->location_project,
            'time_start' => $this->time_start,
            'time_end' => $this->time_end
        ]);

        session()->flash('succes', 'Upload Data Success.');
        return redirect()->to('/job');
    }
}
