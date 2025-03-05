<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Add Organization Details</h1>
        
        <form action="{{ route('org-details.store') }}" method="POST">
            @csrf
            <div class="mt-8">
                <label for="logo" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Logo</label>
                <input type="text" name="logo" id="logo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="mission" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Mission</label>
                <input type="text" name="mission" id="mission" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="vision" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Vision</label>
                <input type="text" name="vision" id="vision" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="faqs" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Frequently Asked Questions</label>
                <input type="text" name="faqs" id="faqs" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Add Details</button>
            </div>
        </form>
    </div>
</x-layouts.admin>