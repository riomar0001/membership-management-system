<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Edit Contact Information</h1>
        
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mt-8">
                <input type="hidden" name="id" value="{{ $id }}">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Organization Name</label>
                <input type="text" name="name" id="name" value="{{ $name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Email</label>
                <input type="email" name="email" id="email" value="{{ $email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="contact_number" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Contact Number</label>
                <input type="text" name="contact_number" id="contact_number" value="{{ $contact_number }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="address" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Address</label>
                <input type="text" name="address" id="address" value="{{ $address }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Update Contact</button>
            </div>
        </form>
    </div>
</x-layouts.admin>