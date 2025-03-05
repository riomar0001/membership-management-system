<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Registration Details</h1>
        
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
    </div>
</x-layouts.admin>