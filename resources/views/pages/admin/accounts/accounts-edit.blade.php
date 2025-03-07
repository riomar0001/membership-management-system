<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Edit User</h1>
            <p class="text-gray-600 dark:text-neutral-400 mt-2">Update user information</p>
        </div>

        <div class="bg-white dark:bg-neutral-800 rounded-lg shadow p-6">
            <form action="{{ route('accounts.update', $user->id) }}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-4">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-neutral-200">First Name</label>
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name', $user->first_name) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white" required>
                    @error('first_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-700 dark:text-neutral-200">Last Name</label>
                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $user->last_name) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white" required>
                    @error('last_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="student_id" class="block mb-2 text-sm font-medium text-gray-700 dark:text-neutral-200">Student ID</label>
                    <input type="number" id="student_id" name="student_id" value="{{ old('student_id', $user->student_id) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white" required>
                    @error('student_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="umindanao_email" class="block mb-2 text-sm font-medium text-gray-700 dark:text-neutral-200">Umindanao Email</label>
                    <input type="email" id="umindanao_email" name="umindanao_email" value="{{ old('umindanao_email', $user->umindanao_email) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white" required>
                    @error('umindanao_email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="program" class="block mb-2 text-sm font-medium text-gray-700 dark:text-neutral-200">Program</label>
                    <input type="text" id="program" name="program" value="{{ old('program', $user->program) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white" required>
                    @error('program')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="year_level" class="block mb-2 text-sm font-medium text-gray-700 dark:text-neutral-200">Year Level</label>
                    <select id="year_level" name="year_level" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white" required>
                        <option value="1" {{ (old('year_level', $user->year_level) == 1) ? 'selected' : '' }}>1st Year</option>
                        <option value="2" {{ (old('year_level', $user->year_level) == 2) ? 'selected' : '' }}>2nd Year</option>
                        <option value="3" {{ (old('year_level', $user->year_level) == 3) ? 'selected' : '' }}>3rd Year</option>
                        <option value="4" {{ (old('year_level', $user->year_level) == 4) ? 'selected' : '' }}>4th Year</option>
                        <option value="5" {{ (old('year_level', $user->year_level) == 5) ? 'selected' : '' }}>5th Year</option>
                    </select>
                    @error('year_level')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="position" class="block mb-2 text-sm font-medium text-gray-700 dark:text-neutral-200">Position</label>
                    <input type="text" id="position" name="position" value="{{ old('position', $user->position) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white" required>
                    @error('position')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-neutral-200">Password Management</label>
                    <a href="{{ route('accounts.reset-password', $user->id) }}" 
                       class="inline-flex items-center px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 focus:outline-none focus:bg-yellow-600"
                       onclick="return confirm('Are you sure you want to reset this user\'s password to the default?');">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw mr-2"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/><path d="M3 21v-5h5"/></svg>
                        Reset Password
                    </a>
                    <p class="text-sm text-gray-500 mt-2">This will reset the user's password</p>
                </div>

                <div class="mb-4">
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-700 dark:text-neutral-200">Role</label>
                    <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white" required>
                        <option value="president" {{ (old('role', $user->role) === 'president') ? 'selected' : '' }}>President</option>
                        <option value="officer" {{ (old('role', $user->role) === 'officer') ? 'selected' : '' }}>Officer</option>
                        <option value="admin" {{ (old('role', $user->role) === 'admin') ? 'selected' : '' }}>Admin</option>
                    </select>
                    @error('role')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-between mt-8">
                    <a href="{{ route('accounts.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 focus:outline-none focus:bg-gray-300 dark:bg-neutral-600 dark:text-neutral-200 dark:hover:bg-neutral-500">Cancel</a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Update User</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin>