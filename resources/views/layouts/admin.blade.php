<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('utils.favicons')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Flexy</title>

    @vite([
        "resources/assets/admin/style/app.scss",
        "resources/assets/admin/js/app.js",
    ])
    @livewireStyles
</head>

<body>
    <main>
        @yield('content')
    </main>
    @livewireScripts
</body>

</html>
