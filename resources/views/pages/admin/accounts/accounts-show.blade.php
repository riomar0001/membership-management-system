<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">User Details</h1>
            <p class="text-gray-600 dark:text-neutral-400 mt-2">View detailed information about this user</p>
        </div>

        <div class="bg-white dark:bg-neutral-800 rounded-lg shadow p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-lg font-semibold text-gray-700 dark:text-neutral-200 mb-4">Basic Information</h2>
                    <div class="mb-3">
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Name</p>
                        <p class="text-base text-gray-900 dark:text-neutral-200">{{ $user->first_name }} {{$user->last_name}}</p>
                    </div>
                    <div class="mb-3">
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Umindanao Email</p>
                        <p class="text-base text-gray-900 dark:text-neutral-200">{{ $user->umindanao_email }}</p>
                    </div>
                    <div class="mb-3">
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Role</p>
                        <p class="inline-block px-2 py-1 mt-1 rounded text-xs font-semibold 
                            @if($user->role === 'admin') bg-red-100 text-red-800 
                            @elseif($user->role === 'officer') bg-blue-100 text-blue-800 
                            @else bg-green-100 text-green-800 @endif">
                            {{ ucfirst($user->role) }}
                        </p>
                    </div>

                     <div class="mb-3">
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Program</p>
                        <p class="text-base text-gray-900 dark:text-neutral-200">{{ $user->program }}</p>
                    </div>
                    <div class="mb-3">
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Year Level</p>
                        <p class="text-base text-gray-900 dark:text-neutral-200">{{ $user->year_level }}</p>
                    </div>
                    <div class="mb-3">
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Position</p>
                        <p class="text-base text-gray-900 dark:text-neutral-200">{{ $user->position }}</p>
                    </div>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-gray-700 dark:text-neutral-200 mb-4">Account Information</h2>
                    <div class="mb-3">
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Created At</p>
                        <p class="text-base text-gray-900 dark:text-neutral-200">{{ \Carbon\Carbon::parse($user->created_at)->format('M d, Y h:i A') }}</p>
                    </div>
                    <div class="mb-3">
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Last Updated</p>
                        <p class="text-base text-gray-900 dark:text-neutral-200">{{ \Carbon\Carbon::parse($user->updated_at)->format('M d, Y h:i A') }}</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-between mt-8">
                <a href="{{ route('accounts.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 focus:outline-none focus:bg-gray-300 dark:bg-neutral-600 dark:text-neutral-200 dark:hover:bg-neutral-500">Back to List</a>
                <div>
                    <a href="{{ route('accounts.edit', $user->id) }}" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 focus:outline-none focus:bg-yellow-600 mr-2">Edit User</a>
                    <form action="{{ route('accounts.destroy', $user->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this user?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">Delete User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>