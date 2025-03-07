<div x-cloak x-show="viewMemberModalIsOpen" x-transition.opacity.duration.200ms
    x-trap.inert.noscroll="viewMemberModalIsOpen" x-on:keydown.esc.window="viewMemberModalIsOpen = false"
    x-on:click.self="viewMemberModalIsOpen = false"
    class="fixed inset-0 z-50 flex justify-center bg-black/80 p-4 pb-8 items-center lg:p-8" role="dialog"
    aria-modal="true" aria-labelledby="defaultModalTitle" style="display: none !important;">
    <!-- Modal Dialog -->
    <div x-show="viewMemberModalIsOpen"
        x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
        x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
        class="flex max-h-[80vh] w-[80vh] flex-col gap-4 p-10 overflow-hidden rounded-xl border border-neutral-300 bg-white text-neutral-600 dark:border-neutral-800 dark:bg-neutral-950 dark:text-neutral-500">
        <div class="flex flex-col justify-start text-start overflow-y-auto ">

            <div>
                <h1 class="text-2xl font-semibold  text-gray-800 dark:text-neutral-200">
                    Member's Information
                </h1>
                <p class="text-xs text-wrap text-gray-800 dark:text-neutral-200">
                    Review member details and approve or reject the membership
                    application.
                </p>

            </div>

            <div class="border-b dark:border-b-neutral-600 border-b-neutral-300 my-5"></div>

            <div>
                <p class="text-sm text-gray-800 dark:text-neutral-200">Student ID: {{ $member->student_id }}</p>

                <h1 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">
                    {{ $member->first_name }} {{ $member->last_name }}
                </h1>
                <p class="text-sm text-gray-800 dark:text-neutral-200">
                    {{ $member->umindanao_email }}
                </p>
                <p class="text-sm text-gray-800 dark:text-neutral-200">
                    {{ $member->year_level }}{{ $member->year_level == 1 ? 'st' : ($member->year_level == 2 ? 'nd' : ($member->year_level == 3 ? 'rd' : 'th')) }}
                    Year | {{ $member->program }}

                </p>
            </div>

            <div class="mt-5 flex flex-col gap-y-10">
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
                        Reviewed By:
                    </span>
                    <span class="text-sm font-medium text-gray-800 dark:text-neutral-200">
                        {{ $member->registered_at }}
                    </span>
                </div>
            </div>

            <div x-data="{ isExpanded: false }" class="mt-5">
                <button id="controlsAccordionItemOne" type="button"
                    class="flex w-full items-center justify-between rounded-lg gap-4 bg-neutral-50 p-2 text-left underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-hidden dark:bg-neutral-900 dark:hover:bg-neutral-900/75 dark:focus-visible:bg-neutral-900/75"
                    aria-controls="accordionItemOne" x-on:click="isExpanded = ! isExpanded"
                    x-bind:class="isExpanded ? 'text-onSurfaceStrong dark:text-onSurfaceDarkStrong' :
                        'text-onSurface dark:text-onSurfaceDark font-medium'"
                    x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
                    Proof of Membership
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                        stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                        x-bind:class="isExpanded ? 'rotate-180' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region"
                    aria-labelledby="controlsAccordionItemOne" x-collapse>
                    <img type="image" class="w-full h-full object-cover rounded-lg mt-2"
                        src="{{ route('members.proof-of-membership', $member->proof_of_membership) }}"
                        alt="proof-of-membership" loading="lazy">
                </div>
            </div>

        </div>

    </div>
</div>
