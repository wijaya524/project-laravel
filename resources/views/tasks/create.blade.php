<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Task</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">

    @extends('layouts.guest')

    @section('content')
    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg max-w-3xl">
        <!-- Back Button -->
        <a href="{{ route('tasks.index') }}" 
           class="inline-block mb-5 text-blue-500 hover:text-blue-700 transition font-medium">
            ← Back to Home
        </a>
    
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">📝 Create Task</h1>
        
        <form action="{{ route('tasks.store') }}" method="POST" class="space-y-5">
            @csrf
    
            <!-- Task Title -->
            <div>
                <label for="title" class="block text-gray-700 font-medium mb-2">Task Title:</label>
                <input type="text" name="title" id="title" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
                       placeholder="Enter your task title (e.g., Buy groceries)" required>
            </div>
    
            <!-- Task Description -->
            <div>
                <label for="description" class="block text-gray-700 font-medium mb-2">Description:</label>
                <textarea name="description" id="description" rows="4" 
                          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
                          placeholder="Enter task details (e.g., Buy milk, eggs, and bread)" required></textarea>
            </div>
    
            <!-- Submit Button -->
            <button type="submit" 
                    class="w-full px-5 py-3 bg-blue-500 text-white text-lg font-semibold rounded-lg hover:bg-blue-600 transition">
                ✅ Save Task
            </button>
        </form>
    </div>
    @endsection
    
</body>
</html>
