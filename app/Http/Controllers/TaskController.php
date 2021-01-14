<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::latest();
   
        return view('tasks.index', compact('tasks'))
        ->with('i', (request()->input('page', 1) - 1) *5);
    }

    public function create() {
        return view('dashboard.create');
    }

    public function store(Request $request) {
        $request->validate([
            'task_name' => 'required',
            'task_interval' => 'required'
        ]);

        Task::create($request->all());

        return redirect()->route('dashboard.index')
                        ->with('success', 'Task Added Sucessfully.');
    }

    public function show(Task $task) {
        return view('dashboard.show', compact('dashboard'));
    }

    public function edit(Task $task) {
        return view('dashboard.edit', compact('dashboard'));
    }

    public function update(Request $request, Task $task) {
        $request->validate([
            'task_name' => 'required',
            'task_interval' => 'required'
        ]);
        $task->update($request->all());

        return redirect()->route('dashboard.index')
                        ->with('success', 'Task Updated Sucessfully.');
    }

    public function delete(Task $task) {
        $task->delete();

        return redirect()->route('dashboard.index')
                        ->with('success', 'Task Deleted Sucessfully.');
    }
}

