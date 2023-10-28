<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link data-n-head="ssr" rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/favicon.ico') }}">
        <title>The gathering</title>
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div id="app"></div>
    </body>
</html>
