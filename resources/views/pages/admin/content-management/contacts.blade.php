<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Contact Information</h1>
        
        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Organization Name</h2>
            <p class="text-gray-600 dark:text-neutral-400">{{ $name }}</p>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Email</h2>
            <p class="text-gray-600 dark:text-neutral-400">{{ $email }}</p>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Contact Number</h2>
            <p class="text-gray-600 dark:text-neutral-400">{{ $contact_number }}</p>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">Address</h2>
            <p class="text-gray-600 dark:text-neutral-400">{{ $address }}</p>
        </div>
    </div>
</x-layouts.admin>