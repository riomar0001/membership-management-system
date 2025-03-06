<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Edit Contact Information</h1>

        <form action="{{ route('socials.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mt-8">
                <input type="hidden" name="id" value="{{ $id }}">
                <label for="facebook" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Facebook</label>
                <input type="text" name="facebook" id="facebook" value="{{ $facebook }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="twitter" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Twitter</label>
                <input type="text" name="twitter" id="twitter" value="{{ $twitter }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="instagram" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Instagram</label>
                <input type="text" name="instagram" id="instagram" value="{{ $instagram }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="linkedin" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Linked In</label>
                <input type="text" name="linkedin" id="linkedin" value="{{ $linkedin }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>
            <div class="mt-8">
                <label for="discord" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Discord</label>
                <input type="text" name="discord" id="discord" value="{{ $linkedin }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>


            <div class="mt-8">
                <button type="submit" class="px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-700 focus:outline-none focus:bg-yellow-700">Update Contact</button>
            </div>
        </form>
    </div>
</x-layouts.admin>
