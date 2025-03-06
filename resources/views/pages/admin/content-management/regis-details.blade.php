<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Registration Details</h1>
         @if ($membership_fee && $registration_start_date && $registration_end_date)
        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Membership Fee</h2>
            <p class="text-gray-600 dark:text-neutral-400">{{ $membership_fee }}</p>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Registration Start Date</h2>
            <p class="text-gray-600 dark:text-neutral-400">{{ $registration_start_date }}</p>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Registration End Date</h2>
            <p class="text-gray-600 dark:text-neutral-400">{{ $registration_end_date }}</p>
        </div>
        <div class="mt-8">
                <a href="{{route('regis-details.edit')}}" class="inline-block px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-700 focus:outline-none focus:bg-yellow-700">Update Details</a>
            </div>
        @else
            <div class="mt-8">
                <p class="text-gray-600 dark:text-neutral-400">No contact information available.</p>
                <a href="{{ route('regis-details.show') }}" class="inline-block px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Add Registration Details</a>
            </div>
        @endif
    </div>
</x-layouts.admin>
