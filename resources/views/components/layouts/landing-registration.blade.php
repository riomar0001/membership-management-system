<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="bg-neutral-950">
    <x-landing.nav />
    {{ $slot }}
    <x-landing.footer />
</body>

</html>
