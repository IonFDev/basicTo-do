@extends('layouts.app')

@section('title', 'Basic To-Do')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Lista de Tareas</h1>
    <ul class="space-y-4">
        @foreach ($tasks as $task)
            <li class="p-4 bg-white rounded shadow list-none">
            <h2 class="text-xl font-semibold">{{ $task->title }}</h2>

            <p class="text-gray-500">{{ $task->description }}</p>

            @if ($task->is_completed > 0)
                <p class="text-green-500 font-semibold mt-2">Completada</p>
            @else
                <p class="text-red-500 font-semibold mt-2">Pendiente</p>
            @endif
        </li>
        @endforeach
    </ul>
    
    <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
        <a href="{{ route('tasks.create') }}">Crear Nueva Tarea</a>
    </button>
@endsection