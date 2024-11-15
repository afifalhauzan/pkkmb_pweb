<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<h1>Edit Profile</h1>
<form action="{{ route('profile.update') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $user->id }}">
    <div>
        <label for="name">Username:</label>
        <input type="text" id="name" name="name" value="{{ $user->username }}">
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}">
    </div>
    <button type="submit">Save</button>
</form>

</body>
</html>