<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Facebook')</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @include('layout._header')
        @include('shared._messages')
        <div class="container">
            @yield('content')
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>