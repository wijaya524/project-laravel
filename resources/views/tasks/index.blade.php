<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do List</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">

    @extends('layouts.app')

    @section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100 ">
        <div class="w-full max-w-2xl p-6 bg-white shadow-xl rounded-lg">
            
    
            <!-- Tombol Add Task -->
            <div class=" mb-5">
                <a href="{{ route('tasks.create') }}" 
                    class="px-5 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
                     Add Task
                </a>
            </div>
    
            <!-- Daftar Tasks -->
            <ul class="space-y-4">
                @foreach($tasks as $task)
                <li class="p-4 bg-gray-50 rounded-lg shadow flex justify-between items-center">
                    <div class="flex items-center space-x-3">
                        <!-- Checkbox -->
                        <form action="{{ route('tasks.toggleComplete', $task->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="focus:outline-none">
                                <input type="checkbox" class="w-6 h-6 accent-green-500" {{ $task->is_completed ? 'checked' : '' }}>
                            </button>
                        </form>
    
                        <!-- Detail Task -->
                        <div>
                            <strong class="text-lg {{ $task->is_completed ? 'line-through text-gray-400' : 'text-gray-800' }}">
                                {{ $task->title }}
                            </strong>
                            <p class="text-gray-600 text-sm">{{ $task->description }}</p>
                        </div>
                    </div>
    
                    <!-- Tombol Edit & Delete -->
                    <div class="flex space-x-2">
                        <a href="{{ route('tasks.edit', $task->id) }}" 
                            class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition text-sm">
                             Edit
                        </a>
    
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition text-sm">
                                 Delete
                            </button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endsection
    
</body>
</html>
