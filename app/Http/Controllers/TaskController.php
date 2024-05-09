<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Assuming 'role' is the attribute that determines if a user is admin or not
        if ($user->role === 'admin') {
            $tasks = Task::all();
            return view('tasks.admin', compact('tasks'));
        } else {
            $tasks = $user->tasks;
            return view('tasks.index', compact('tasks'));
        }
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);
        $validatedData['user_id'] = Auth::id();
        Task::create($validatedData);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function edit(Task $task)
    {
        // Ensure that the authenticated user owns the task
        if ($task->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('tasks.form', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        // Ensure that the authenticated user owns the task
        if ($task->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $validatedData = $request->validate([
            'title' => 'required|max:255',
        ]);

        $task->update($validatedData);

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
    

}
