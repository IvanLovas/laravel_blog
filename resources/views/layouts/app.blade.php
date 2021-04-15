<html>
    <head>
        <title>@yield('title')</title>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h2>Posts</h2>
        <ul>
            @yield('content')
        </ul>
    </body>
</html>