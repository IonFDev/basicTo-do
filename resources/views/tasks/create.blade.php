@extends('layouts.app')

@section('title', 'Crear Tarea')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Crear Nueva Tarea</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Título:</label>
            <input type="text" name="title" id="title" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Descripción:</label>
            <textarea name="description" id="description" class="w-full px-3 py-2 border rounded" required></textarea>
        </div>
        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Crear Tarea</button>
    </form>
@endsection