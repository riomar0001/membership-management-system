<div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen"
    x-on:keydown.esc.window="modalIsOpen = false" x-on:click.self="modalIsOpen = false"
    class="fixed inset-0 z-50 flex items-end justify-center bg-black/80 p-4 pb-8 sm:items-center lg:p-8" role="dialog"
    aria-modal="true" aria-labelledby="defaultModalTitle">
    <!-- Modal Dialog -->
    <div x-show="modalIsOpen"
        x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
        x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
        class="flex h-[80vh] w-[80vh] flex-col gap-4 p-10 overflow-hidden rounded-xl border border-neutral-300 bg-white text-neutral-600 dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-500">
        <div class="flex flex-col justify-start text-start">

            <div>
                <h1 class="text-2xl font-semibold  text-neutral-900 dark:text-neutral-300">
                    Member's Information
                </h1>
                <p class="text-sm  text-neutral-900 dark:text-neutral-300">
                    Review member details and approve or reject the membership
                    application.
                </p>

            </div>

            <div class="border-b dark:border-b-neutral-600 border-b-neutral-300 my-5"></div>

            <div>
                <p class="text-sm text-neutral-500">Student ID: {{ $member->student_id }}</p>

                <h1 class="text-2xl font-semibold text-neutral-500">
                    {{ $member->first_name }} {{ $member->last_name }}
                </h1>
                <p class="text-sm text-neutral-500">
                    {{ $member->umindanao_email }}
                </p>
                <p class="text-sm text-neutral-500">
                    {{ $member->year_level }}{{ $member->year_level == 1 ? 'st' : ($member->year_level == 2 ? 'nd' : ($member->year_level == 3 ? 'rd' : 'th')) }}
                    Year | {{ $member->program }}

                </p>
            </div>

            <div class="mt-5 sm:mt-8 grid grid-cols-2 sm:grid-cols-3 gap-5">
                <div class="space-y-2">
                    <span class="block text-xs uppercase text-neutral-500 ">
                        Membership Status:
                    </span>
                    <span
                        class="
                    @if ($member->membership_status == 'Pending') py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-orange-100 text-orange-800 rounded-full dark:bg-orange-500/10 dark:text-orange-500
                    @elseif($member->membership_status == 'Rejected') py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500
                    @elseif($member->membership_status == 'Approved') py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500
                    @else text-neutral-800 @endif">
                        {{ $member->membership_status ?? 'Pending' }}
                    </span>
                </div>
                <div class="space-y-2">
                    <span class="block text-xs uppercase text-neutral-500 ">
                        Reviewed By:
                    </span>
                    <span class="text-sm font-medium text-neutral-800 dark:text-neutral-400">
                        {{ $member->reviewed_by }}
                    </span>
                </div>
                <div class="space-y-2">
                    <span class="block text-xs uppercase text-neutral-500 ">
                        Reviewed By:
                    </span>
                    <span class="text-sm font-medium text-neutral-800 dark:text-neutral-400">
                        {{ $member->registered_at }}
                    </span>
                </div>
            </div>

            <div className="mt-5 sm:mt-10">
                <h4 className="text-xs font-semibold uppercase text-gray-800 ">
                    Proof of payment
                </h4>
                <div className="mt-3">
                    @if (isset($member->receipt_files) && count($member->receipt_files) > 0)
                        @foreach ($member->receipt_files as $receipt)
                            <div class="mb-4">
                                <img class="rounded-lg w-full object-contain max-h-72"
                                    src="{{ route('view.receipt', ['path' => $receipt]) }}" alt="Proof of payment" />
                            </div>
                        @endforeach
                    @else
                        <p class="text-sm text-neutral-500">No payment receipt available</p>
                    @endif
                </div>
            </div>

        </div>

    </div>
</div>
