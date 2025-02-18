<x-layouts.admin>
    <h2>Welcome to Dashboard</h2>
    <p>Your role: {{ auth()->user()->role }}</p>

    @if (auth()->user()->role === 'admin')
        <p class="text-blue-500">You are an Admin.</p>
    @endif

    @if (auth()->user()->role === 'president')
        <p class="text-green-500">You are a President.</p>
    @endif

    @if (auth()->user()->role === 'admin' || auth()->user()->role === 'president')
        <p class="text-purple-500">You are an Admin & President.</p>
    @endif

    @if (auth()->user()->role === 'admin')
        <p class="text-red-500">You are an Officer.</p>
    @endif

    <a href="{{ url('/admin') }}">Admin Page</a>
    <a href="{{ url('/admin-only') }}">Admin & President Page</a>
    <form action="{{ url('/admin/logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

</x-layouts.admin>
