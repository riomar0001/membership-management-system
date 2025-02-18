<x-layouts.auth>
    <h2 class=" text-2xl font-semibold mb-6">Login</h2>
    @error('umindanao_email')
        <div class="text-red-500">{{ $message }}</div>
    @enderror
    <form method="POST" action="{{ route('login') }}" class="space-y-4 w-lg">
        @csrf
        <div>
            <input type="email" name="umindanao_email" placeholder="University Email" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        <div>
            <input type="password" name="password" placeholder="Password" required
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        <div>
            <button type="submit"
                class="w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Login</button>
        </div>
    </form>
</x-layouts.auth>
