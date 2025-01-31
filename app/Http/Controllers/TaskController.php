<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())->get();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $userId = Auth::id();
        if (!$userId) {
            return redirect()->route('login')->withErrors('You must be logged in to create a task.');
        }

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        Task::create([
            'title' => $request->title,
            'is_completed' => false,
            'user_id' => $userId,
            'description' => $request->description,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function edit(Task $task)
    {
        $this->authorize('update', $task); // Optional: Policy for security
        return view('tasks.edit', compact('task'));
    }
    

    public function update(Request $request, Task $task)
    {
        $this->authorize('update', $task); // Optional: Policy for security
    
        $request->validate([
            'title' => 'required|max:255',
        ]);
    
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
    
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }
    

    public function destroy(Task $task)
    {
        $this->authorize('delete', $task); // Optional: Policy for security
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }

    public function toggleComplete(Task $task)
    {
        $this->authorize('update', $task); // Optional: Policy for security
        $task->is_completed = !$task->is_completed;
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task status updated.');
    }


}
