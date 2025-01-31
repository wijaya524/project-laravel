<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Tailwind CSS -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="bg-gray-100 dark:bg-gray-800 font-sans dark:text-white">
    <div id="app">
   

        <!-- Navbar -->
        <nav class="bg-white shadow-md fixed w-full z-10">

            <div class="container mx-auto flex items-center justify-between py-4 px-6 lg:px-16">
                <a href="<?php echo e(url('/')); ?>" class="text-2xl font-bold text-blue-600 hover:text-blue-700 transition">
                    📌 To-Do List
                </a>



                <!-- Desktop Menu -->
                <div class="hidden sm:flex space-x-6 items-center">
                    <?php if(auth()->guard()->guest()): ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-gray-700 hover:text-blue-500">Login</a>
                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="text-gray-700 hover:text-blue-500">Register</a>
                        <?php endif; ?>
                    <?php else: ?>
                        <a href="<?php echo e(route('profile.index')); ?>" class="text-gray-700 font-semibold">
                            👤 <?php echo e(Auth::user()->name); ?>

                        </a>
                        <form action="<?php echo e(route('logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="text-red-500 hover:text-red-600 transition">Logout</button>
                        </form>
                    <?php endif; ?>
                </div>

                <!-- Mobile Menu Toggle -->
                <button id="menu-toggle" class="sm:hidden text-gray-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="sm:hidden hidden bg-white shadow-md">
                <ul class="flex flex-col items-center space-y-4 py-4">
                    <?php if(auth()->guard()->guest()): ?>
                        <li><a href="<?php echo e(route('login')); ?>" class="text-gray-700 hover:text-blue-500">Login</a></li>
                        <?php if(Route::has('register')): ?>
                            <li><a href="<?php echo e(route('register')); ?>" class="text-gray-700 hover:text-blue-500">Register</a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo e(route('profile.index')); ?>" class="text-gray-700 font-semibold">
                                👤 <?php echo e(Auth::user()->name); ?>

                            </a>
                        </li>
                        <li>
                            <form action="<?php echo e(route('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="text-red-500 hover:text-red-600 transition">Logout</button>
                            </form>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="py-6">
            <div class="container mx-auto px-6 sm:px-8 lg:px-16 ">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
    </div>

    <!-- JavaScript for Mobile Menu -->
    <script>
        document.getElementById('menu-toggle').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Toggle dark mode based on user preference
  
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\project-uts\resources\views/layouts/app.blade.php ENDPATH**/ ?>