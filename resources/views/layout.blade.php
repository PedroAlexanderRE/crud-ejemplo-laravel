<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>CRUD EJEMPLO</title>
    </head>
    <body>

        <nav class="navbar navbar-light" style="background-color: #81c5f5;">
            <ul class="nav nav-tabs">
                <li class="nav-items"><a class="nav-link" href= "{{route('home') }}">Home</a></li>
                <li class="nav-items"><a class="nav-link" href="{{route('about') }}">About</a></li>
                <li class="nav-items"><a class="nav-link"href="{{route('users.index') }}">Users</a></li>
            </ul>
        </nav>
        <div class="container">
            @yield('content')
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
    </html>