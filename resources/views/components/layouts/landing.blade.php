<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

</head>

<body class="bg-neutral-900">
    <x-landing.nav />

    <x-landing.hero/>
    <x-landing.about/>
    <x-landing.goals/>
    <x-landing.collaborators/>
    <x-landing.mv/>

    <x-landing.footer />
</body>

</html>
