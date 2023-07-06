<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $users = User::all();

        return view('tasks.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        $task = new Task;
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->user_id = $request->input('user_id');
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Tugas berhasil dibuat.');
    }
}
