<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Socials Information</h1>

        @if ($facebook && $twitter && $instagram && $linkedin && $discord)
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
            <p class="text-gray-600 dark:text-neutral-400">{{ $instagram }}</p>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">LinkedIn</h2>
            <p class="text-gray-600 dark:text-neutral-400">{{ $linkedin }}</p>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Discord</h2>
            <p class="text-gray-600 dark:text-neutral-400">{{ $discord }}</p>
        </div>
        <div class="mt-8">
                <a href="{{ route('socials.edit') }}" class="inline-block px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-700 focus:outline-none focus:bg-yellow-700">Update Socials</a>
            </div>
        @else
            <div class="mt-8">
                <p class="text-gray-600 dark:text-neutral-400">No socials information available.</p>
                <a href="{{ route('socials.show') }}" class="inline-block px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Add Socials</a>
            </div>
        @endif
    </div>
</x-layouts.admin>
