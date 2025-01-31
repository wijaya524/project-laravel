<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Task</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-100 font-sans">

    

    <?php $__env->startSection('content'); ?>
    <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg max-w-3xl">
        <!-- Back Button -->
        <a href="<?php echo e(route('tasks.index')); ?>" 
           class="inline-block mb-5 text-blue-500 hover:text-blue-700 transition font-medium">
            ← Back to Home
        </a>
    
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">✏️ Edit Task</h1>
    
        <form action="<?php echo e(route('tasks.update', $task->id)); ?>" method="POST" class="space-y-5">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
    
            <!-- Task Title -->
            <div>
                <label for="title" class="block text-gray-700 font-medium mb-2">Task Title:</label>
                <input type="text" id="title" name="title" value="<?php echo e($task->title); ?>" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
                       placeholder="Enter new task title" required>
            </div>
    
            <!-- Task Description -->
            <div>
                <label for="description" class="block text-gray-700 font-medium mb-2">Description:</label>
                <textarea name="description" id="description" rows="4" 
                          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
                          placeholder="Update task details..." required><?php echo e($task->description); ?></textarea>
            </div>
    
            <!-- Submit Button -->
            <button type="submit" 
                    class="w-full px-5 py-3 bg-blue-500 text-white text-lg font-semibold rounded-lg hover:bg-blue-600 transition">
                🔄 Update Task
            </button>
        </form>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\project-uts\resources\views/tasks/edit.blade.php ENDPATH**/ ?>