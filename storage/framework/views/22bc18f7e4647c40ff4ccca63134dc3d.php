<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Tailwind CSS -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="bg-gray-100 font-sans">
    <div id="app">
        <!-- Main Content for Guest Pages -->
        <main class="py-6">
            <div class="container mx-auto px-6">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\project-uts\resources\views/layouts/guest.blade.php ENDPATH**/ ?>