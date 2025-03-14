<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite(['resources/css/app.css', 'resources/css/preline.css', 'resources/js/app.js'])
    <title>Manage Members</title>

    <style>
        .dt-layout-row:has(.dt-search),
        .dt-layout-row:has(.dt-length),
        .dt-layout-row:has(.dt-paging) {
            display: none !important;
        }
    </style>

    <script>
        // This code should be added to <head>.
        // It's used to prevent page load glitches.
        const html = document.querySelector('html');
        const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') ===
            'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
        const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' &&
            window.matchMedia('(prefers-color-scheme: dark)').matches);

        if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
        else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
        else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
        else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
    </script>
    @stack('scripts')
</head>

<body class="antialiased bg-gray-50 dark:bg-neutral-950" x-data="{ modalIsOpen: false }">
    <x-admin.header />
    <x-admin.breadcrumb />
    <x-admin.sidebar />
    <main class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <div class="px-4 py-5 sm:px-6 lg:p-10 mx-auto bg-gray-50 dark:bg-neutral-950 rounded-xl shadow-xs">
                <div>
                    <div
                        class="flex flex-col md:flex-row justify-between items-center border-b border-gray-200 dark:border-neutral-700 pb-10 mb-5 gap-y-5">
                        <div class="">
                            <h1 class="text-2xl font-semibold  text-gray-800 dark:text-neutral-200">
                                Account Settings
                            </h1>
                            <p class="text-sm  text-gray-800 dark:text-neutral-200">
                                Manage your profile and account settings
                            </p>

                        </div>

                        <div class="border-b border-gray-200 dark:border-neutral-700 pb-5 mb-5">


                        </div>
                    </div>
                </div>
                <div class="mx-auto mt-10">
                    <div class="flex flex-col lg:flex-row gap-5">
                        <div
                            class="w-72 h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                            <section class=" w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                                <ul class="flex flex-col space-y-3">
                                    <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-950 dark:hover:bg-neutral-800 dark:text-neutral-200"
                                            href="{{ route('admin.profile') }}">
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-950 dark:hover:bg-neutral-800 dark:text-neutral-200"
                                            href="{{ route('admin.profile.editPassword') }}">
                                            Password
                                        </a>
                                    </li>

                                </ul>
                            </section>
                        </div>
                        <div class="max-w-2xl w-full">
                            {{ $slot }}
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
</body>

</html>
