<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">User Accounts</h1>
            <a href="{{ route('accounts.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Add New User</a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                {{ session('error') }}
            </div>
        @endif

        @if ($users->isEmpty())
            <p class="text-gray-600 dark:text-neutral-400">No users found.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white dark:bg-neutral-800">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-700">Name</th>
                            <th class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-700">Email</th>
                            <th class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-700">Role</th>
                            <th class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-700">Created</th>
                            <th class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-700">{{ $user->first_name }} {{$user->last_name}}</td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-700">{{ $user->umindanao_email }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-700">
                                    <span class="px-2 py-1 rounded text-xs font-semibold 
                                        @if($user->role === 'admin') bg-red-100 text-red-800 
                                        @elseif($user->role === 'officer') bg-blue-100 text-blue-800 
                                        @else bg-green-100 text-green-800 @endif">
                                        {{ ucfirst($user->role) }}
                                    </span>
                                </td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-700">{{ \Carbon\Carbon::parse($user->created_at)->format('M d, Y') }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-700 space-x-2">
                                    <div class="flex items-center space-x-2">
                                        <a href="{{ route('accounts.show', $user->id) }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                        </a>
                                        <a href="{{ route('accounts.edit', $user->id) }}" class="text-yellow-600 hover:text-yellow-800 dark:text-yellow-400 dark:hover:text-yellow-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                                        </a>
                                        <form action="{{ route('accounts.destroy', $user->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-layouts.admin>