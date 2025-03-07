<div x-cloak x-show="confirmDeleteModal" x-transition.opacity.duration.200ms x-trap.inert.noscroll="confirmDeleteModal"
    x-on:keydown.esc.window="confirmDeleteModal = false" x-on:click.self="confirmDeleteModal = false"
    class="fixed inset-0 z-50 flex justify-center bg-black/80 p-4 pb-8 items-center lg:p-8" role="dialog"
    aria-modal="true" aria-labelledby="defaultModalTitle" style="display: none !important;">
    <!-- Modal Dialog -->
    <div x-show="confirmDeleteModal"
        x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
        x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
        class="flex flex-col gap-10 p-10 overflow-hidden rounded-xl border border-neutral-300 bg-white text-neutral-600 dark:border-neutral-800 dark:bg-neutral-950 dark:text-neutral-500">
        <div class="flex flex-col justify-center text-center overflow-y-auto gap-5">

            <div class="flex flex-col justify-center text-center gap-y-2 mb-5  ">
                <h1 class="text-lg font-semibold  text-gray-800 dark:text-neutral-200">
                    Member Delete Confirmation
                </h1>
                <p class="text-sm text-wrap text-gray-800 dark:text-neutral-200">
                    Are you sure you want to delete this member?
                </p>
            </div>
            <form action="{{ route('members.destroy', $member->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="flex flex-col md:flex-row gap-x-10 gap-y-5 justify-center items-center">
                    <button type="submit" x-on:click="confirmDeleteModal = false"
                        class="py-2  w-48 justify-center inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-hidden focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">

                        Yes, Confirm Delete
                    </button>
                    <button type="button" x-on:click="confirmDeleteModal = false"
                        class="py-2 w-48 justify-center inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-white/10 dark:text-white dark:hover:bg-white/20 dark:hover:text-white dark:focus:bg-white/20 dark:focus:text-white">
                        No, Don't Delete
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
