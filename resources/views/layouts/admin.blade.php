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
            @auth
                <li>
                    <a href="" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('entries') }}" class="p-3">Products</a>
                </li>
                <li>
                    <a href="" class="p-3">Settings</a>
                </li>
            @endauth
        </ul>

        <ul class="flex items-center">
            @auth
                <li>
                    <a href="" class="p-3">{{ auth()->user()->name }}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                        @csrf
                        <button type="submit" class="p-3">Logout</button>
                    </form>
                </li>
            @endauth
        </ul>
    </nav>
    @yield('content')
</body>
</html>