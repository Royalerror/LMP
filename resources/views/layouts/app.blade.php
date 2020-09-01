<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>La Maison Passive - @yield('title')</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @yield('style')
    </head>

    <body>
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')

        <script src="{{ mix('js/app.js') }}"></script>
        @yield('script')
    </body>

</html>