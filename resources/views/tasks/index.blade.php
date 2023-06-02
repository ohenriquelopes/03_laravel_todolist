<x-layout>
    <x-slot name="title">
        Lista de Tarefas
    </x-slot>

    <h1>Lista de Tarefas</h1>

    <ul>
        @foreach($tasks as $task)
            <li> {{$task}} </li>
        @endforeach
    </ul>
</x-layout>
