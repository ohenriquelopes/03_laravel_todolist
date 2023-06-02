<x-layout title="To Do List">

    <a href="/tasks/criar">Adicionar</a>
    <ul>
        @foreach($tasks as $task)
            <li> {{$task}} </li>
        @endforeach
    </ul>

</x-layout>
