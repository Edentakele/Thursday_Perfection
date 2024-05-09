<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Our Platform</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f3f4f6;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 2rem;
            color: #4a90e2;
        }
        p {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: #4a90e2;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }
        .btn:hover {
            background-color: #3680c1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome To Our Platform</h1>
         @if (Route::has('login'))
            @auth
                <a href="{{ url('/tasks') }}" class="btn">Explore Tasks</a>
            @else
                <a href="{{ route('login') }}" class="btn">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn">Sign up</a>
                @endif
            @endauth
        @endif
    </div>
</body>
</html>
