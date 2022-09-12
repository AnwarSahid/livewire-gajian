<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class Showdetail extends Component
{
    public $detail;

    public function mount($id)
    {
        $this->detail = Project::find($id);
    }

    public function render()
    {
        $detail = $this->detail;
        return view('livewire.showdetail', compact('detail'))->layout('layouts.app');
    }
}
