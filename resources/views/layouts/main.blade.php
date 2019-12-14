<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <title>Ohio Laravel</title>
    </head>
    <body class="font-sans antialiased bg-cover bg-welcome">
        @yield('content')
    </body>
</html>
