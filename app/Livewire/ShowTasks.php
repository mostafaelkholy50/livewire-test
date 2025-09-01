<?php

namespace App\Livewire;

use App\Models\task;
use Livewire\Component;
use Livewire\Attributes\On;

class ShowTasks extends Component
{

    #[On('submit')]
     public function refreshTasksList()
    {

    }
    public function render()
    {
        $counter = 1;
        $count = task::count();
        $tasks = task::latest()->get();
        return view('livewire.show-tasks', compact('tasks', 'count', 'counter'));
    }
    public function deleteTask($id)
    {
        task::find($id)->delete();
        $this->dispatch('submit');
    }
}
