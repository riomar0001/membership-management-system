<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Socials Information</h1>
        
        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Facebook</h2>
            <p class="text-gray-600 dark:text-neutral-400">{{ $facebook }}</p>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">twitter</h2>
            <p class="text-gray-600 dark:text-neutral-400">{{ $twitter }}</p>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Instagram</h2>
            <p class="text-gray-600 dark:text-neutral-400">{{ $linkedin }}</p>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Discord</h2>
            <p class="text-gray-600 dark:text-neutral-400">{{ $discord }}</p>
        </div>
    </div>
</x-layouts.admin>