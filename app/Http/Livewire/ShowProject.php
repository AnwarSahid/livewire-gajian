<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowProject extends Component
{
    public function render()
    {
        $jobs = Project::where('user_id', Auth::user()->id)->get();
        return view('livewire.show-project', compact('jobs'));
    }

    public function detail($job)
    {
        return redirect()->route('detail', ['id' => $job]);
    }
}
