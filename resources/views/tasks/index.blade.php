<x-layout>
    <x-slot name="title">
        Lista de Tarefas
    </x-slot>

    <div class="container">
    <h1>Lista de Tarefas</h1>


    <form action="{{ route('tasks.store') }}" method="post" class="form-add-task" >
        @csrf
        <div class="form-group">
            <label title="title" class="task-label">Titulo da Tarefa</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar Tarefa</button>
    </form>

{{--    <ul class="task-list">--}}
{{--        @foreach($tasks as $task)--}}
{{--            <li> {{$task->title}} </li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}

    @foreach($tasks as $task)
        <dl class="task-item">
            <span class="task-list">{{ $task->title }}</span>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline" >
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
            <form action="{{ route('tasks.edit', $task->id) }}" method="get" style="display: inline">
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </dl>
    @endforeach
    </div>
</x-layout>
