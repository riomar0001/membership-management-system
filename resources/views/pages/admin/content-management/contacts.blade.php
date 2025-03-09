<x-layouts.admin>
    <div class="px-4 py-5 sm:px-6 lg:px-5 lg:py-5 mx-auto">
        <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-sm p-4 sm:p-7">
            <!-- Header -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-800">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                        Contact Information
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                        Organization contact details and information
                    </p>
                </div>

                <div>
                    @if ($name && $email && $contact_number && $address)
                        <a href="{{ route('contacts.edit') }}" 
                           class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-yellow-600 text-white hover:bg-yellow-700 focus:outline-hidden focus:bg-yellow-700 disabled:opacity-50 disabled:pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil">
                                <path d="M17 3a2.85 2.85 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/>
                                <path d="m15 5 4 4"/>
                            </svg>
                            Update Contacts
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

            @if ($name && $email && $contact_number && $address)
                <div class="p-6">
                    <div class="grid gap-y-8">
                        <div class="bg-gray-50 dark:bg-neutral-800 rounded-lg p-4 sm:p-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-semibold text-gray-800 dark:text-neutral-200">
                                    Organization Name
                                </h3>
                                <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                    {{ $name }}
                                </p>
                            </div>
                        </div>

                        <div class="bg-gray-50 dark:bg-neutral-800 rounded-lg p-4 sm:p-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-semibold text-gray-800 dark:text-neutral-200">
                                    Email Address
                                </h3>
                                <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                    {{ $email }}
                                </p>
                            </div>
                        </div>

                        <div class="bg-gray-50 dark:bg-neutral-800 rounded-lg p-4 sm:p-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-semibold text-gray-800 dark:text-neutral-200">
                                    Contact Number
                                </h3>
                                <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                    {{ $contact_number }}
                                </p>
                            </div>
                        </div>

                        <div class="bg-gray-50 dark:bg-neutral-800 rounded-lg p-4 sm:p-6">
                            <div class="flex flex-col">
                                <h3 class="text-base font-semibold text-gray-800 dark:text-neutral-200">
                                    Address
                                </h3>
                                <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                    {{ $address }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="p-6 flex flex-col items-center justify-center">
                    <div class="text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <h3 class="mt-2 text-lg font-medium text-gray-900 dark:text-neutral-200">No contact information available</h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-400">
                            Please add contact details for the organization.
                        </p>
                        <div class="mt-6">
                            <a href="{{ route('contacts.show') }}" 
                               class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"/>
                                    <path d="M12 5v14"/>
                                </svg>
                                Add Contact Information
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-layouts.admin>