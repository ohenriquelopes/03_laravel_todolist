<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
//        $tasks = TasksController::all();
//        return view('tasks.index', compact('tasks'));

        $tasks = Task::all();
        return view('tasks.index')->with('tasks', $tasks);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        Task::create([
            'title' => $request->input('title'),
    ]);
        // salvar tarefa no banco ou local de armazenamento

        return redirect('/tasks');
    }
}
