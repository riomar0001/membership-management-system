<x-layouts.admin>
    <!-- Card Section -->
    <div class="px-4 sm:px-6 lg:px-8 lg:py-10 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-950 dark:border-neutral-800">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div
                        class="shrink-0 flex justify-center items-center size-[46px] bg-teal-100 text-teal-800 rounded-lg dark:bg-teal-500/10 dark:text-teal-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="oklch(0.437 0.078 188.216)" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-users">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                    </div>

                    <div class="grow">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                Registered Members
                            </p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                {{ $members->where('membership_status', '!=', 'Rejected')->count() }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-950 dark:border-neutral-800">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div
                        class="shrink-0 flex justify-center items-center size-[46px] bg-teal-100 text-teal-800 rounded-lg dark:bg-teal-500/10 dark:text-teal-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="oklch(0.437 0.078 188.216)" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user-check">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <polyline points="16 11 18 13 22 9" />
                        </svg>
                    </div>

                    <div class="grow">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                Approved Members
                            </p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                            <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                                {{ $members->where('membership_status', 'Approved')->count() }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-950 dark:border-neutral-800">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div
                        class="shrink-0 flex justify-center items-center size-[46px] bg-yellow-100 text-yellow-800 rounded-lg dark:bg-yellow-500/10 dark:text-yellow-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="oklch(0.476 0.114 61.907)" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user-plus">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <line x1="19" x2="19" y1="8" y2="14" />
                            <line x1="22" x2="16" y1="11" y2="11" />
                        </svg>
                    </div>

                    <div class="grow">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                Pending Approval
                            </p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                {{ $members->where('membership_status', 'Pending')->count() }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-950 dark:border-neutral-800">
                <div class="p-4 md:p-5 flex gap-x-4">
                    <div
                        class="shrink-0 flex justify-center items-center size-[46px] bg-red-100 text-red-800 rounded-lg   dark:bg-red-500/10 dark:text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="oklch(0.444 0.177 26.899)" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="text-red-800 lucide lucide-user-x">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <line x1="17" x2="22" y1="8" y2="13" />
                            <line x1="22" x2="17" y1="8" y2="13" />
                        </svg>
                    </div>

                    <div class="grow">
                        <div class="flex items-center gap-x-2">
                            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                Rejected Members
                            </p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-2">
                            <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                                {{ $members->where('membership_status', 'Rejected')->count() }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>


    <!-- Card -->
    <div class="flex flex-row gap-4 px-4 sm:px-6 lg:px-8 mx-auto">
        <div
            class="w-full md:w-1/2 p-4 md:p-5 min-h-102.5 flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
            <!-- Header -->
            <div class="flex flex-wrap justify-between items-center gap-2">
                <div>
                    <h2 class="text-sm text-gray-500 dark:text-neutral-500">
                        Year Level Distribution
                    </h2>
                    <p class="text-[22px] font-medium text-gray-800 dark:text-neutral-200">
                        Members by Year Level
                    </p>
                </div>
            </div>
            <!-- End Header -->

            <div id="hs-multiple-bar-charts">
                <canvas id="yearLevelChart"></canvas>
            </div>
        </div>

        <div
            class="w-full md:w-1/2 p-4 md:p-5 min-h-102.5 flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
            <!-- Header -->
            <div class="flex flex-wrap justify-between items-center gap-2">
                <div>
                    <h2 class="text-sm text-gray-500 dark:text-neutral-500">
                        Monthly Registrations
                    </h2>
                    <p class="text-[22px] font-medium text-gray-800 dark:text-neutral-200">
                        User Registrations per Month
                    </p>
                </div>
            </div>
            <!-- End Header -->

            <div id="monthly-registrations-chart">
                <canvas id="monthlyRegistrationsChart"></canvas>
            </div>
        </div>
    </div>

    <div class="px-4 sm:px-6 lg:px-8 lg:py-10 ">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div
                    class="bg-white border border-gray-200 p-5 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-800">
                    <!-- Header -->
                    <div
                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-800">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                Pending Members
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-neutral-400">
                                List of all pending members
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <a href="{{ route('members.index') }}"
                                    class="py-2 px-3 mb-5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                    View All Members
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    @include('components.admin.dashboard.members-table', ['members' => $members->where('membership_status', 'Pending')])
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('yearLevelChart').getContext('2d');
            const yearLevels = @json($yearLevels);

            const data = {
                labels: ['1st Year', '2nd Year', '3rd Year', '4th Year'],
                datasets: [{
                    label: 'Number of Members',
                    data: [
                        yearLevels[1] || 0,
                        yearLevels[2] || 0,
                        yearLevels[3] || 0,
                        yearLevels[4] || 0
                    ],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    animation: {
                        duration: 1000, // duration of the animation in milliseconds
                        easing: 'easeOutBounce' // easing function for the animation
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            new Chart(ctx, config);

            // Monthly Registrations Line Chart
            const monthlyCtx = document.getElementById('monthlyRegistrationsChart').getContext('2d');
            const monthlyRegistrations = @json($monthlyRegistrations);

            const monthlyData = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'User Registrations',
                    data: [
                        monthlyRegistrations[1] || 0,
                        monthlyRegistrations[2] || 0,
                        monthlyRegistrations[3] || 0,
                        monthlyRegistrations[4] || 0,
                        monthlyRegistrations[5] || 0,
                        monthlyRegistrations[6] || 0,
                        monthlyRegistrations[7] || 0,
                        monthlyRegistrations[8] || 0,
                        monthlyRegistrations[9] || 0,
                        monthlyRegistrations[10] || 0,
                        monthlyRegistrations[11] || 0,
                        monthlyRegistrations[12] || 0
                    ],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    fill: false
                }]
            };

            const monthlyConfig = {
                type: 'line',
                data: monthlyData,
                options: {
                    animation: {
                        duration: 1000, // duration of the animation in milliseconds
                        easing: 'easeOutBounce' // easing function for the animation
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            new Chart(monthlyCtx, monthlyConfig);
        });
    </script>

</x-layouts.admin>
