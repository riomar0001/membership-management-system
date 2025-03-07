<x-layouts.admin>

    <div class="px-4 py-5 sm:px-6 lg:px-5 lg:py-5 mx-auto bg-white dark:bg-neutral-900 rounded-xl shadow-xs">
        <div>
            <a href="{{ route('members.index') }}"
                class="py-2 px-3 mb-5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-left">
                    <path d="m12 19-7-7 7-7" />
                    <path d="M19 12H5" />
                </svg>
                Go Back
            </a>
            <div
                class="flex flex-col md:flex-row justify-between items-center border-b border-gray-200 dark:border-neutral-700 pb-10 mb-5 gap-y-5">
                <div class="">
                    <h1 class="text-2xl font-semibold  text-gray-800 dark:text-neutral-200">
                        Members Details
                    </h1>
                    <p class="text-sm  text-gray-800 dark:text-neutral-200">
                        Review member details and approve or reject the membership application.
                    </p>

                </div>
                <div class="flex items-center gap-x-5">
                    <button type="button"
                        class="py-2 px-10 inline-flex items-center gap-x-2 text-base font-medium rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-pencil">
                            <path
                                d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                            <path d="m15 5 4 4" />
                        </svg>
                        Edit Information
                    </button>
                </div>
            </div>
        </div>
        <div class="max-w-4xl mx-auto p-4 sm:p-7">
            <div class="flex flex-col justify-start text-start overflow-y-auto gap-y-10">
                <div class="space-y-2">
                    <p class="text-base text-gray-800 dark:text-neutral-200">Student ID: {{ $member->student_id }}</p>

                    <h1 class="text-3xl font-semibold text-gray-800 dark:text-neutral-200">
                        {{ $member->first_name }} {{ $member->last_name }}
                    </h1>
                    <p class="text-base text-gray-800 dark:text-neutral-200">
                        {{ $member->umindanao_email }}
                    </p>
                    <p class="text-base text-gray-800 dark:text-neutral-200">
                        {{ $member->year_level }}{{ $member->year_level == 1 ? 'st' : ($member->year_level == 2 ? 'nd' : ($member->year_level == 3 ? 'rd' : 'th')) }}
                        Year | {{ $member->program }}

                    </p>
                </div>

                <div class="flex flex-row justify-between">
                    <div class="space-y-2">
                        <span class="block text-xs uppercase text-neutral-500 ">
                            Membership Status:
                        </span>
                        @php
                            $statusStyles = [
                                'Pending' =>
                                    'py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-orange-100 text-orange-800 rounded-full dark:bg-orange-500/10 dark:text-orange-500',
                                'Rejected' =>
                                    'py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500',
                                'Approved' =>
                                    'py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500',
                                'default' => 'text-neutral-800',
                            ];

                            $status = $member->membership_status ?? 'Pending';
                            $className = $statusStyles[$status] ?? $statusStyles['default'];

                        @endphp
                        <span class="{{ $className }}">
                            {{ $status }}
                        </span>
                    </div>
                    <div class="space-y-2">
                        <span class="block text-xs uppercase text-gray-500 dark:text-neutral-500 ">
                            Reviewed By:
                        </span>
                        <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                            {{ $member->reviewed_by }}
                        </span>
                    </div>
                    <div class="space-y-2">
                        <span class="block text-xs uppercase text-gray-500 dark:text-neutral-500 ">
                            Registration Date:
                        </span>
                        <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                            {{ $member->created_at }}
                        </span>
                    </div>
                </div>

                <div>
                    <span class="block text-xs uppercase text-gray-500 dark:text-neutral-500 ">
                        Proof of Membership:
                    </span>
                    <img type="image" class="w-full object-cover rounded-lg mt-2"
                        src="{{ route('members.proof-of-membership', $member->proof_of_membership) }}"
                        alt="proof-of-membership" loading="lazy">
                </div>

                <div class="flex flex-col md:flex-row  gap-y-5 md:gap-x-10">
                    <button type="button"
                        class="w-full py-2 px-16 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-hidden focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                        Approve
                    </button>
                    <button type="button"
                        class="w-full py-2 px-16 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-hidden focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">
                        Reject
                    </button>
                </div>

            </div>

        </div>

    </div>



</x-layouts.admin>
