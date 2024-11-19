<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <h1 class="text-4xl font-extrabold text-blue-800 underline decoration-4 mb-3">
        Welcome, {{ $user->name }}
    </h1>
    <p class="text-lg text-gray-700 mb-6">
        Email: <span class="text-blue-500">{{ $user->email }}</span>
    </p>
    <a href="{{ route('profile') }}"  class="inline-block text-white bg-blue-800 hover:bg-blue-600 rounded-lg px-6 py-2 text-lg font-semibold transition duration-300">
        Edit Profile
    </a>

</body>

</html>