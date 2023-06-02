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

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
//        Task::destroy($id);
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.index')->with('sucess', 'Registro excluido com sucesso');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $validadeData = $request->validate([
            'title'=>'required|max:255',
        ]);

        $task->update($validadeData);

        return redirect()->route('tasks.index')->with('success','Tarefa atualizada com sucesso.');
    }
}
