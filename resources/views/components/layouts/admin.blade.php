<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite(['resources/css/app.css', 'resources/css/preline.css', 'resources/js/app.js'])
    <title>Login</title>

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


        const {
            dataTable
        } = new HSDataTable('#hs-datatable-with-hidden-columns');
        const select = HSSelect.getInstance('#hs-datatable-with-hidden-columns-select', true);

        select.element.on('change', (indices) => {
            dataTable.columns().every(function(index) {
                const column = this;

                if (indices.includes(index.toString())) column.visible(false);
                else column.visible(true);
            });
        });
    </script>
    @stack('scripts')
</head>

<body class="antialiased bg-gray-50 dark:bg-neutral-900">
    <x-admin.header />
    <x-admin.breadcrumb />
    <x-admin.sidebar />
    <main class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            {{ $slot }}
        </div>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script>
        (function() {
            const dataTable = $('#hs-datatable-with-hidden-columns').DataTable({
                paging: true,
                searching: true,
                language: {
                    zeroRecords: "<div class=\"py-10 px-5 flex flex-col justify-center items-center text-center\"><svg class=\"shrink-0 size-6 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"11\" cy=\"11\" r=\"8\"/><path d=\"m21 21-4.3-4.3\"/></svg><div class=\"max-w-sm mx-auto\"><p class=\"mt-2 text-sm text-gray-600 dark:text-neutral-400\">No search results</p></div></div>"
                }
            });

            const select = HSSelect.getInstance('#hs-datatable-with-hidden-columns-select', true);

            select.element.on('change', function() {
                const indices = $(this).val();
                dataTable.columns().every(function(index) {
                    const column = this;

                    if (indices.includes(index.toString())) column.visible(false);
                    else column.visible(true);
                });
            });
        })();
    </script>
</body>

</html>
