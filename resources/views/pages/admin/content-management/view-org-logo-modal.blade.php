<div x-cloak x-show="viewLogoModal" x-transition.opacity.duration.200ms x-trap.inert.noscroll="viewLogoModal"
    x-on:keydown.esc.window="viewLogoModal = false" x-on:click.self="viewLogoModal = false"
    class="fixed inset-0 z-50 flex justify-center bg-black/80 p-4 pb-8 items-center lg:p-8" role="dialog"
    aria-modal="true" aria-labelledby="defaultModalTitle" style="display: none !important;">
    <!-- Modal Dialog -->
    <div x-show="viewLogoModal"
        x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
        x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
        class="flex max-h-[80vh] w-[80vh] flex-col gap-4 p-10 overflow-hidden rounded-xl border border-neutral-300 bg-white text-neutral-600 dark:border-neutral-800 dark:bg-neutral-950 dark:text-neutral-500">
        <div class="flex flex-col justify-start text-start overflow-y-auto ">

            <div>
                <h1 class="text-2xl font-semibold  text-gray-800 dark:text-neutral-200">
                    Current Logo
                </h1>
            </div>

            <div class="border-b dark:border-b-neutral-600 border-b-neutral-300 my-5"></div>

            <div>
                <img type="image" class="w-full h-full object-cover rounded-lg mt-2"
                    src="{{ route('landing.logo', $logo) }}" alt="proof-of-membership" loading="lazy">
            </div>

        </div>

    </div>
</div>
