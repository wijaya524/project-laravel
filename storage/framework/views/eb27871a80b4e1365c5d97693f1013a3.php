<!-- resources/views/profile/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-100 font-sans flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md p-6 bg-white shadow-xl rounded-xl">
        <div class="flex items-center justify-between mb-5">
            <h1 class="text-2xl font-bold text-gray-800">Your Profile</h1>
            <a href="<?php echo e(route('tasks.index')); ?>" 
                class="text-blue-500 hover:text-blue-700 transition">🏠 Home</a>
        </div>

        <div class="space-y-4">
            <!-- Name -->
            <div class="p-4 border rounded-lg shadow-sm bg-gray-50">
                <label class="block text-gray-700 font-medium mb-1">Name:</label>
                <p class="text-gray-800 font-semibold"><?php echo e($user->name); ?></p>
            </div>

            <!-- Email -->
            <div class="p-4 border rounded-lg shadow-sm bg-gray-50">
                <label class="block text-gray-700 font-medium mb-1">Email:</label>
                <p class="text-gray-800 font-semibold"><?php echo e($user->email); ?></p>
            </div>
        </div>

        <!-- Edit Profile Button -->
        <div class="mt-6 text-center">
            <a href="<?php echo e(route('profile.edit')); ?>" 
                class="inline-block w-full px-4 py-2 text-white bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 transition">
                ✏️ Edit Profile
            </a>
        </div>
    </div>

</body>
</html>
<?php /**PATH C:\laragon\www\project-uts\resources\views/profile/index.blade.php ENDPATH**/ ?>