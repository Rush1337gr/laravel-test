<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    @yield('title')
</head>
<body>
<div class="main-container">
    <div class="block">
        <div class="heading-title">
            <h1><a href="{{route('/')}}">rush<span>sense</span></a></h1>
        </div>
        <div class="block-menu">
            <ul>
                <li><a href="{{route('home')}}">home</a></li>
                @auth
                    <li><a href="{{route('profile')}}">profile</a></li>
                @else
                    <li><a href="{{route('registration')}}">registration</a></li>
                    <li><a href="{{route('authorization')}}">authorization</a></li>
                @endauth
            </ul>
        </div>
        <div class="block-info">
            <p>info</p>
        </div>
    </div>
    <hr>
   @yield('content')
</div>
</body>
</html>


