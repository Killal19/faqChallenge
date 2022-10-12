<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ URL::asset('../../public/css/App.css')}}"> --}}
    {{-- {{URL::aaset('../../public/css/App.css')}} --}}
</head>

<body>
    <nav class="flex justify-between items-center mb-4">
        <a href="/">
            <h1>myTitle</h1>
        </a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
                <li>
                    <span class="font-bold uppercase">
                        User {{ auth()->user()->name }}
                    </span>
                </li>
                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            Logout
                        </button>
                    </form>
                </li>
            @else
                <li class="hover:text-laravel">
                    About Us
                </li>

                <li>
                    <a href="/register" class="hover:text-laravel"> Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel">Login</a>
                </li>
            @endauth
        </ul>
    </nav>
</body>

</html>
