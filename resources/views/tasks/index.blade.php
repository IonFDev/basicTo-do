@extends('layouts.app')

@section('title', 'Basic To-Do')

@section('content')
    <h1>Lista de Tareas</h1>
    <ul>
        @foreach ($tasks as $task)
            @if ($task->is_completed != 1)
                <li>{{ $task->title }}</li>
                <br>
                <p class="text-mauve-500">{{ $task->description }}</p>
            @endif
        @endforeach
    </ul>
@endsection