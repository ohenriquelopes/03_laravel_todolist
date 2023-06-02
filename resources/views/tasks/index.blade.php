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

    @foreach($tasks as $task)
        <li>
            {{ $task->title }}
            <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline">
            @csrf
            @method('delete')
            <button type="submit">Excluir</button>
            </form>
            <form action="{{ route('tasks.edit', $task->id) }}" method="get" style="display: inline">
                <button type="submit">Editar</button>
            </form>
        </li>
    @endforeach

</x-layout>
