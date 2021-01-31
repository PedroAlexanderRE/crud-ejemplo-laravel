<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD EJEMPLO</title>
    </head>
    <body>
        <ul>
            <li><a href= "{{route('home') }}">Home</a></li>
            <li><a href="{{route('about') }}">About</a></li>
            <li><a href="{{route('users.index') }}">Users</a></li>
        </ul>

        <div>
            @yield('content')
        </div>
    </body>
    </html>