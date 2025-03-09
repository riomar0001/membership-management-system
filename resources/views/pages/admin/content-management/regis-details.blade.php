<x-layouts.admin>
    <div class="px-4 py-5 sm:px-6 lg:px-5 lg:py-5 mx-auto">
        <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-sm p-4 sm:p-7">
            <!-- Header -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-800">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                        Registration Details
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                        Organization registration details and information
                    </p>
                </div>

                <div>
                    @if ($membership_fee && $registration_start_date && $registration_end_date)
                        <a href="{{ route('regis-details.edit') }}" 
                           class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-yellow-600 text-white hover:bg-yellow-700 focus:outline-hidden focus:bg-yellow-700 disabled:opacity-50 disabled:pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil">
                                <path d="M17 3a2.85 2.85 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/>
                                <path d="m15 5 4 4"/>
                            </svg>
                            Update Details
                        </a>
                    @endif
                </div>
            </div>
            <!-- End Header -->

            @if(session('success'))
                <div class="m-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                    {{ session('success') }}
                </div>
            @endif

            @if ($membership_fee && $registration_start_date && $registration_end_date)
                <div class="p-6">
                    <div class="grid gap-y-8">
                        <div class="bg-gray-50 dark:bg-neutral-800 rounded-lg p-4 sm:p-6">
                            <div class="flex items-center">
                                <h3 class="text-base font-semibold text-gray-800 dark:text-neutral-200">
                                    Membership Fee
                                </h3>
                            </div>
                            <p class="mt-2 text-gray-600 dark:text-neutral-400 break-all">
                                {{ $membership_fee }}
                            </p>
                        </div>

                        <div class="bg-gray-50 dark:bg-neutral-800 rounded-lg p-4 sm:p-6">
                            <div class="flex items-center">
                                <h3 class="text-base font-semibold text-gray-800 dark:text-neutral-200">
                                    Registration Start Date
                                </h3>
                            </div>
                            <p class="mt-2 text-gray-600 dark:text-neutral-400 break-all">
                                {{ $registration_start_date }}
                            </p>
                        </div>

                        <div class="bg-gray-50 dark:bg-neutral-800 rounded-lg p-4 sm:p-6">
                            <div class="flex items-center">
                                <h3 class="text-base font-semibold text-gray-800 dark:text-neutral-200">
                                    Registration End Date
                                </h3>
                            </div>
                            <p class="mt-2 text-gray-600 dark:text-neutral-400 break-all">
                                {{ $registration_end_date }}
                            </p>
                        </div>
                    </div>
                </div>
            @else
                <div class="p-6 flex flex-col items-center justify-center">
                    <div class="flex flex-col text-center justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#846c6c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-fading-plus"><path d="M12 2a10 10 0 0 1 7.38 16.75"/><path d="M12 8v8"/><path d="M16 12H8"/><path d="M2.5 8.875a10 10 0 0 0-.5 3"/><path d="M2.83 16a10 10 0 0 0 2.43 3.4"/><path d="M4.636 5.235a10 10 0 0 1 .891-.857"/><path d="M8.644 21.42a10 10 0 0 0 7.631-.38"/></svg>
                        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-400">
                            Please add registration details for the organization.
                        </p>
                        <div class="mt-6">
                            <a href="{{ route('regis-details.show') }}" 
                               class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"/>
                                    <path d="M12 5v14"/>
                                </svg>
                                Add Registration Details
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-layouts.admin>