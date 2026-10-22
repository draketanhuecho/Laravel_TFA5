<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks for Today Management System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        nav a { margin-right: 15px; text-decoration: none; font-weight: bold; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('welcome') }}">Home (Today)</a>
        <a href="{{ route('tasks.index') }}">All Tasks</a>
        <a href="{{ route('profile') }}">Profile</a>
        <a href="{{ route('about') }}">About</a>
    </nav>
    <hr>
    <main>
        @yield('content')
    </main>
</body>
</html>