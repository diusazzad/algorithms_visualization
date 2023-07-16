<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('auth.user.task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.user.task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // Create a new task
        $task = new Task($validatedData);
        $task->user_id = auth()->user()->id;
        $task->save();

        // Redirect to the task index or show route
        return redirect()->route('user.tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Return a view to show the details of a task
        return view('auth.user.task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Return a view to edit a task
        return view('auth.user.task.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, Task $task)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // Update the task
        $task->update($validatedData);

        // Redirect to the task index or show route
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Task $task)
    {
        // Delete the task
        $task->delete();

        // Redirect to the task index route
        return redirect()->route('tasks.index');
    }
}
