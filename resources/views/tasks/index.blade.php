@extends('layouts.app')

@section('title', 'Basic To-Do')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Lista de Tareas</h1>
    @if ($tasks->isEmpty())
        <p class="text-gray-500">No hay tareas pendientes.</p>
    @else
        <ul class="space-y-4">
            @foreach ($tasks as $task)
                <li class="p-4 bg-white rounded shadow list-none">
                    <h2 class="text-xl font-semibold inline">{{ $task->title }}</h2>
                    
                    <button class="inline"><a href="{{ route('tasks.edit', $task) }}">Editar</a></button>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="text-red-500">
                            Borrar
                        </button>
                    </form>
    
                    <p class="text-gray-500">{{ $task->description }}</p>
    
                    @if ($task->is_completed > 0)
                        <p class="text-green-500 font-semibold mt-2">Completada</p>
                    @else
                        <p class="text-red-500 font-semibold mt-2">Pendiente</p>
                    @endif
                    <form action="{{ route('tasks.toggle', $task) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <input type="checkbox" onchange="this.form.submit()" {{ $task->is_completed ? 'checked' : '' }}>
                    </form>
                </li>
            @endforeach   
        </ul>
    @endif
    <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
        <a href="{{ route('tasks.create') }}">Crear Nueva Tarea</a>
    </button>
@endsection