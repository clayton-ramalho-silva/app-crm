<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Task as ModelsTask;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Task extends Component
{
    private $user;

    public $tasks;

    public function render()
    {
        $this->user = Auth::user();
        $this->tasks = ModelsTask::where('user_id', $this->user->id)
                                ->where('status','pending')
                                ->orderBy('created_at', 'desc')
                                ->get();

        return view('livewire.dashboard.task');
    }
}
