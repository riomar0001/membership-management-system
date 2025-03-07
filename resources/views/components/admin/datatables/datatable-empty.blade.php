<div
    class="w-full h-[631px] py-36 flex flex-col justify-center items-center border-b border-gray-200 dark:border-neutral-800">
    <h2 class="mt-5 text-2xl font-semibold text-gray-800 dark:text-white">
        No members found
    </h2>
    <p class="mt-2 text-base text-gray-600 dark:text-neutral-400">
        Add a new member to get started.
    </p>

    <div class="mt-5 flex flex-col sm:flex-row gap-2">
        <button type="button" onclick="window.location='{{ route('members.create') }}'"
            class="py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M5 12h14" />
                <path d="M12 5v14" />
            </svg>
            Add Member
        </button>
    </div>
</div>
