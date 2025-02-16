<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <x-admin.header />

    <div class="flex">
        <x-admin.sidebar />

        <main class="flex-1 p-6">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
