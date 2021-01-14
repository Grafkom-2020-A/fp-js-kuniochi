<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('dashboard.index', compact('tasks'));
        
    }

    public function tariCoba(){
        return view('tari-coba');
    }

    public function create(Request $request) {
        $query = \App\Models\Task::create($request->all());
        return redirect('/dashboard')->with('success', 'Task Added Sucessfully.');
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
        $task->delete($task);

        return redirect('/dashboard')->with('success', 'Task Deleted Sucessfully.');
    }
}
