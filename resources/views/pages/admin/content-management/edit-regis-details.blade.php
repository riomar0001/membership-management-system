<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Edit Contact Information</h1>
        
        <form action="{{ route('regis-details.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mt-8">
                <input type="hidden" name="id" value="{{ $id }}">
                <label for="membership_fee" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Membership Fee</label>
                <input type="number" name="membership_fee" id="membership_fee" value="{{ $membership_fee }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="registration_start_date" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Registartion Start Date</label>
                <input type="date" name="registration_start_date" id="registration_start_date" value="{{ $registration_start_date }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="registration_end_date" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Registration End Date</label>
                <input type="date" name="registration_end_date" id="registration_end_date" value="{{ $registration_end_date }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Update Contact</button>
            </div>
        </form>
    </div>
</x-layouts.admin>