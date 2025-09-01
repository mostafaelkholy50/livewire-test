<?php

namespace App\Livewire;

use App\Models\task;
use Livewire\Component;
use Livewire\Attributes\On;

class MakeTasks extends Component
{
    public $name;

    public function submit()
    {
        task::create([
            'name' => $this->name,
        ]);
        $this->reset('name');
        $this->dispatch('submit');
         session()->flash('message', 'تمت إضافة المهمة');
    }
    public function render()
    {
        return view('livewire.make-tasks');
    }

}
