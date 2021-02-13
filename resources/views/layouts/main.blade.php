<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Birre</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div class="container">
            <header>
                @yield('header')
            </header>

            <main>
                @yield('content')
            </main>

            <footer class="mb-5">
                @yield('footer')
            </footer>
        </div>
    </body>
</html>
