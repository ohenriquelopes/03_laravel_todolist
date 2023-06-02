<x-layout>
    <x-slot name="title">
    Lista de Tarefas
</x-slot>


    <form action="{{ route('tasks.update', $task->id) }}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="title">Titulo da Tarefa</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
        </div>
        <button type="submit">Atualizar Tarefa</button>
    </form>
</x-layout>
