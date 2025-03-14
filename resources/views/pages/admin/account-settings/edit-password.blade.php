<x-layouts.profile-setting>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.profile.updatePassword') }}">
        @csrf
        @method('POST')
        <!-- Password -->
        <div>
            <div class="mb-10">
                <h1 class="text-xl font-semibold  text-gray-800 dark:text-neutral-200">
                    Update password
                </h1>
                <p class="text-sm  text-gray-800 dark:text-neutral-200">
                    Ensure your account is using a long, random password to stay secure
                </p>

            </div>

            <div class="space-y-4">
                <div>
                    <label for="current_password" class="block text-sm font-medium mb-2 dark:text-white">Current
                        Password</label>
                    <input type="password" id="current_password" name="current_password"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:focus:ring-neutral-600">
                    @error('current_password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="new_password" class="block text-sm font-medium mb-2 dark:text-white">New
                        Password</label>
                    <input type="password" id="new_password" name="new_password"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:focus:ring-neutral-600">
                    @error('new_password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="new_password_confirmation"
                        class="block text-sm font-medium mb-2 dark:text-white">Confirm New Password</label>
                    <input type="password" id="new_password_confirmation" name="new_password_confirmation"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:focus:ring-neutral-600">
                </div>
            </div>
        </div>

        <!-- Form Buttons -->
        <div class="mt-8 flex justify-end gap-x-2">
            <button type="submit"
                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Update Password
            </button>
        </div>
    </form>
</x-layouts.profile-setting>
