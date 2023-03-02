<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </div>
        <nav class="navigaton">
            <ul class="list">
                <li class=" {{Route::currentRouteName() == 'homepage' ? 'active' : ''}}">
                    <a href="{{route('homepage')}}">Characters</a>
                </li>
                <li class=" {{Route::currentRouteName() == 'comics.index' ? 'active' : ''}}">
                    <a href="{{route('comics.index')}}">Comics</a>
                </li>
                <li>
                    <a href="">Movies</a>
                </li>
                <li>
                    <a href="">Tv</a>
                </li>
                <li>
                    <a href="">Games</a>
                </li>
                <li>
                    <a href="">Collectibles</a>
                </li>
                <li>
                    <a href="">Videos</a>
                </li>
                <li>
                    <a href="">Fans</a>
                </li>
                <li>
                    <a href="">News</a>
                </li>
                <li>
                    <a href="">Shop</a>
                </li>
            </ul>
        </nav>
    </div>
</body>
</html>