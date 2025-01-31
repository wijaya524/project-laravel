<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Make sure to include Tailwind CSS -->
</head>
<body class="bg-gray-100 font-sans">
    @extends('layouts.guest')

    @section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-full max-w-sm sm:max-w-md lg:max-w-lg p-8 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-center mb-6 text-gray-800">{{ __('Login') }}</h2>
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus 
                           class="mt-2 block w-full px-4 py-2 border rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror">
                    @error('email')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" 
                           class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 @error('password') border-red-500 @enderror">
                    @error('password')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
    
                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="ml-2 text-sm text-gray-600" for="remember">{{ __('Remember Me') }}</label>
                    </div>
                </div>
    
                <!-- Submit Button -->
                <div class="flex items-center justify-between">
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
    
            <!-- Register Link -->
            <div class="mt-4 text-center">
                <a href="{{ route('register') }}" class="text-sm text-blue-600 hover:text-blue-500">
                    {{ __('Don\'t have an account? Register here') }}
                </a>
            </div>
        </div>
    </div>
    @endsection
    
    
</body>
</html>
