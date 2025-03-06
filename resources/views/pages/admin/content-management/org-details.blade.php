<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Organization's Details</h1>

        @if ($logo && $mission && $vision && $faqs)
            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Logo</h2>
                <img src="{{ asset('storage/'.$logo) }}" alt="Logo" class="mt-2 h-20">
            </div>

            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Mission</h2>
                <p class="text-gray-600 dark:text-neutral-400">{{ $mission }}</p>
            </div>

            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Vision</h2>
                <p class="text-gray-600 dark:text-neutral-400">{{ $vision }}</p>
            </div>

            <div class="mt-8">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">FAQs</h2>
                <pre class="text-gray-600 dark:text-neutral-400">{{ json_encode($faqs, JSON_PRETTY_PRINT) }}</pre>
            </div>

            <div class="mt-8">
                <a href="{{ route('org-details.edit') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Update Details</a>
            </div>
        @else
            <div class="mt-8">
                <p class="text-gray-600 dark:text-neutral-400">No organization details available.</p>
                <a href="{{ route('org-details.create') }}" class="inline-block px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Add Details</a>
            </div>
        @endif
    </div>
</x-layouts.admin>