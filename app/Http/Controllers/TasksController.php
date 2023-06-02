<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
//        $tasks = TasksController::all();
//        return view('tasks.index', compact('tasks'));

        $tasks = [
            'Compras',
            'Lavar roupa',
            'Nao sei'
        ];

        return view('tasks.index')->with('tasks', $tasks);
    }
}
