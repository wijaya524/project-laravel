<!-- resources/views/profile/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-100 font-sans">
 <!-- resources/views/profile/edit.blade.php -->


<?php $__env->startSection('content'); ?>
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white shadow-xl rounded-xl">
        <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Edit Profile</h1>

        <form action="<?php echo e(route('profile.update')); ?>" method="POST" class="space-y-5">
            <?php echo csrf_field(); ?>
            <?php echo method_field('POST'); ?>

            <!-- Input untuk Nickname -->
            <div>
                <label for="name" class="block text-gray-700 font-medium mb-2">Nickname:</label>
                <input type="text" name="name" id="name" value="<?php echo e($user->name); ?>" 
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" 
                class="w-full px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-700 transition">
                💾 Save Changes
            </button>
        </form>

        <!-- Tombol Back -->
        <div class="mt-4 text-center">
            <a href="<?php echo e(route('profile.index')); ?>" 
                class="text-blue-500 hover:text-blue-700 transition">
                ⬅ Back to Profile
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

    
</body>
</html>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\project-uts\resources\views/profile/edit.blade.php ENDPATH**/ ?>