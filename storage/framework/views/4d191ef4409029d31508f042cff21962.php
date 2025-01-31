<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?> <!-- Make sure to include Tailwind CSS -->
</head>
<body class="bg-gray-100 font-sans">
    

    <?php $__env->startSection('content'); ?>
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-full max-w-sm sm:max-w-md lg:max-w-lg p-8 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-center mb-6 text-gray-800"><?php echo e(__('Login')); ?></h2>
    
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
    
                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700"><?php echo e(__('Email Address')); ?></label>
                    <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus 
                           class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-sm text-red-500"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
    
                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700"><?php echo e(__('Password')); ?></label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" 
                           class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-sm text-red-500"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
    
                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                        <label class="ml-2 text-sm text-gray-600" for="remember"><?php echo e(__('Remember Me')); ?></label>
                    </div>
                </div>
    
                <!-- Submit Button -->
                <div class="flex items-center justify-between">
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        <?php echo e(__('Login')); ?>

                    </button>
                </div>
            </form>
    
            <!-- Register Link -->
            <div class="mt-4 text-center">
                <a href="<?php echo e(route('register')); ?>" class="text-sm text-blue-600 hover:text-blue-500">
                    <?php echo e(__('Don\'t have an account? Register here')); ?>

                </a>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
    
    
</body>
</html>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\project-uts\resources\views/auth/login.blade.php ENDPATH**/ ?>