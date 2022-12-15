<?php

namespace App\Http\Livewire;

use App\Models\Task;
use App\Models\TimeWorked;
use Livewire\Component;

class AddTask extends Component
{
    public $newTask;
    public $changeTask;
    public $showInput = false;
    public $tasks;
    public $changeInput = false;
    public $task_id;


    public function addTask()
    {
        $task = new Task();
        $task->name = $this->newTask;
        $task->save();
        $this->showInput = false;
        $this->tasks = Task::all();
    }

    public function changeInput($id)
    {
        $this->changeInput = true;
        $this->task_id = $id;
    }

    public function changeTask($id)
    {
        $task = Task::findorfail($id);
        $task->name = $this->changeTask;
        $task->save();
        $this->tasks = Task::all();
        $this->changeInput = false;
    }

    public function showInput()
    {
        $this->showInput = true;
    }

    public function deleteTask($id)
    {
        $task = Task::findorfail($id);
        if(TimeWorked::where('task_id', $id)->exists())
        {
            session()->flash('message', 'Task is in use');
        }
        else
        {
            $task->delete();
            $this->tasks = Task::all();
        }
        $this->tasks = Task::all();
    }


    public function render()
    {
        return view('livewire.add-task');
    }
}
