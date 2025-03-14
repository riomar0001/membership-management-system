<x-layouts.profile-setting>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.profile.updateProfile') }}">
        @csrf
        @method('POST')

        <!-- Personal Information -->
        <div>
            <div class="mb-10">
                <h1 class="text-xl font-semibold  text-gray-800 dark:text-neutral-200">
                    Personal Information
                </h1>
                <p class="text-sm  text-gray-800 dark:text-neutral-200">
                    Manage your profile and account settings
                </p>

            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- First Name -->
                <div>
                    <label for="first_name" class="block text-sm font-medium mb-2 dark:text-white">First
                        Name</label>
                    <input type="text" id="first_name" name="first_name"
                        value="{{ old('first_name', $user->first_name) }}"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:focus:ring-neutral-600">
                    @error('first_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Last Name -->
                <div>
                    <label for="last_name" class="block text-sm font-medium mb-2 dark:text-white">Last
                        Name</label>
                    <input type="text" id="last_name" name="last_name"
                        value="{{ old('last_name', $user->last_name) }}"
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:focus:ring-neutral-600">
                    @error('last_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Email -->
            <div class="mt-4">
                <label for="umindanao_email" class="block text-sm font-medium mb-2 dark:text-white">Email</label>
                <input type="email" id="umindanao_email" name="umindanao_email"
                    value="{{ old('umindanao_email', $user->umindanao_email) }}"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:focus:ring-neutral-600">
                @error('umindanao_email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Additional read-only fields -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
                <div>
                    <label class="block text-sm font-medium mb-2 dark:text-white">Role</label>
                    <input type="text" value="{{ ucfirst($user->role) }}" disabled
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200"
                        readonly>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2 dark:text-white">Student ID</label>
                    <input type="text" value="{{ $user->student_id }}" disabled
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200"
                        readonly>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2 dark:text-white">Program</label>
                    <input type="text" value="{{ $user->program }}" disabled
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200"
                        readonly>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2 dark:text-white">Position</label>
                    <input type="text" value="{{ $user->position }}" disabled
                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200"
                        readonly>
                </div>
            </div>
        </div>

        <!-- Form Buttons -->
        <div class="mt-8 flex justify-start gap-x-2">
            <button type="submit"
                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Save changes
            </button>
        </div>
    </form>
</x-layouts.profile-setting>
