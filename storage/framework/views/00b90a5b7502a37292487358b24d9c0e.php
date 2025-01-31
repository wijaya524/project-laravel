<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do List</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-100 font-sans">

    

    <?php $__env->startSection('content'); ?>
    <div class="flex items-center justify-center min-h-screen bg-gray-100 ">
        <div class="w-full max-w-2xl p-6 bg-white shadow-xl rounded-lg">
            
    
            <!-- Tombol Add Task -->
            <div class=" mb-5">
                <a href="<?php echo e(route('tasks.create')); ?>" 
                    class="px-5 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
                     Add Task
                </a>
            </div>
    
            <!-- Daftar Tasks -->
            <ul class="space-y-4">
                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="p-4 bg-gray-50 rounded-lg shadow flex justify-between items-center">
                    <div class="flex items-center space-x-3">
                        <!-- Checkbox -->
                        <form action="<?php echo e(route('tasks.toggleComplete', $task->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="focus:outline-none">
                                <input type="checkbox" class="w-6 h-6 accent-green-500" <?php echo e($task->is_completed ? 'checked' : ''); ?>>
                            </button>
                        </form>
    
                        <!-- Detail Task -->
                        <div>
                            <strong class="text-lg <?php echo e($task->is_completed ? 'line-through text-gray-400' : 'text-gray-800'); ?>">
                                <?php echo e($task->title); ?>

                            </strong>
                            <p class="text-gray-600 text-sm"><?php echo e($task->description); ?></p>
                        </div>
                    </div>
    
                    <!-- Tombol Edit & Delete -->
                    <div class="flex space-x-2">
                        <a href="<?php echo e(route('tasks.edit', $task->id)); ?>" 
                            class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition text-sm">
                             Edit
                        </a>
    
                        <form action="<?php echo e(route('tasks.destroy', $task->id)); ?>" method="POST" onsubmit="return confirm('Are you sure?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" 
                                class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition text-sm">
                                 Delete
                            </button>
                        </form>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
    
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\project-uts\resources\views/tasks/index.blade.php ENDPATH**/ ?>