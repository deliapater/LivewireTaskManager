<?php

namespace App\Livewire;

use Livewire\Component;

class TaskManager extends Component
{
    public $tasks = [];
    public $task;

    public function addTask()
    {
        if ($this->task) {
            $this->tasks[] = $this->task;
            $this->task = '';
        }
    }

    public function removeTask($index)
    {
        unset($this->tasks[$index]);
        $this->tasks = array_values($this->tasks);
    }
    public function render()
    {
        return view('livewire.task-manager');
    }
}
