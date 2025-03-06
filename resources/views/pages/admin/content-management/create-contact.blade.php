<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Add Contact Information</h1>
        
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="mt-8">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Organization Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="contact_number" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Contact Number</label>
                <input type="text" name="contact_number" id="contact_number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="address" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Address</label>
                <input type="text" name="address" id="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Add Contact</button>
            </div>
        </form>
    </div>
</x-layouts.admin>