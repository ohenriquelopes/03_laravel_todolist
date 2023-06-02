<x-layout>
    <x-slot name="title">
        Lista de Tarefas
    </x-slot>

    <h1>Lista de Tarefas</h1>


    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <div>
            <label title="title">Titulo da Tarefa</label>
            <input type="text" name="title" id="title">
        </div>
        <button type="submit">Adicionar Tarefa</button>
    </form>

    <ul>
        @foreach($tasks as $task)
            <li> {{$task}} </li>
        @endforeach
    </ul>

</x-layout>
