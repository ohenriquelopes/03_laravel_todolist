<x-layout>
    <x-slot name="title">
        Criar Tarefa
    </x-slot>

    <h1>Criar Tarefa</h1>

    <form action="/tasks" method="post">
    @csrf
    <label for="title">Titulo da Tarefa:</label>
    <input type="text" name="title" id="title" required>

    <button type="submit">Criar</button>
    </form>
</x-layout>
