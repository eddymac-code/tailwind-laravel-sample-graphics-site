<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acme Graphics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="bg-gray-200">
    <nav class="mb-6 p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="{{ route('home') }}" class="p-3">Home</a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="p-3">About</a>
            </li>
            <li>
                <a href="{{ route('gallery') }}" class="p-3">Latest Products</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>