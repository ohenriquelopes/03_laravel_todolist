<x-layout>
    <x-slot name="title">
        Lista de Tarefas
    </x-slot>

    <h1>Lista de Tarefas</h1>


    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <div>
            <label title="title">Titulo da Tarefa</label>
            <label for="title"><input type="text" name="title" id="title"></label>
        </div>
        <button type="submit">Adicionar Tarefa</button>
    </form>

    <ul>
        @foreach($tasks as $task)
            <li> {{$task->title}} </li>
        @endforeach
    </ul>

</x-layout>
