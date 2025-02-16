<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <x-landing.nav />

    <main>
        {{ $slot }}
    </main>

    <x-landing.footer />
</body>

</html>
