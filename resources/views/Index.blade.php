<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title', 'Train List')</title>
    @yield('head-cdn')
    @vite('resources/js/app.js')
</head>
<body>
    @include('component.header')
    <main>
        @include('component.main')
    </main>
    @include('component.footer')

    @yield('costom-script')
</body>
</html>