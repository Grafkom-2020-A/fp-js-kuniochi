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
        $task = Task::find($task->id);
        return view('dashboard/edit', ['task' => $task]);
    }

    public function update(Request $request, Task $task) {
        $task->update($request->all());

        return redirect('/dashboard')->with('success', 'Task Updated Sucessfully.');
    }

    public function delete(Task $task) {
        $task = Task::find($task->id);
        $task->delete($task);
        return redirect('/dashboard')->with('success', 'Task Deleted Sucessfully.');
    }
}
