<x-layout>
    <x-slot name="title">
    Lista de Tarefas
</x-slot>
    <div class="container">
    <h1>Lista de Tarefas</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="post" class="form-add-task">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title" class="task-label">Titulo da Tarefa</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Tarefa</button>
    </form>
    </div>
</x-layout>
