<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Edit Registration Details</h1>

        <form id="regisForm" action="{{ route('regis-details.store') }}" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="id" value="{{ $id }}">
            <div class="mt-8">
                <label for="membership_fee" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Membership Fee</label>
                <input type="number" name="membership_fee" id="membership_fee" value="{{ $membership_fee }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="registration_start_date" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Registration Start Date</label>
                <input type="date" name="registration_start_date" id="registration_start_date" value="{{ $registration_start_date }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <label for="registration_end_date" class="block text-sm font-medium text-gray-700 dark:text-neutral-300">Registration End Date</label>
                <input type="date" name="registration_end_date" id="registration_end_date" value="{{ $registration_end_date }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-neutral-700 dark:border-neutral-600 dark:text-neutral-300" required>
            </div>

            <div class="mt-8">
                <button type="submit" class="px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-700 focus:outline-none focus:bg-yellow-700">Update Details</button>
            </div>
        </form>
    </div>

    <!-- Error Modal -->
    <div id="errorModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-8">
            <h2 class="text-xl font-semibold text-gray-800">Error</h2>
            <p class="mt-4 text-gray-600">The registration start date cannot be later than the end date. Please correct the dates.</p>
            <div class="mt-6 text-right">
                <button id="closeModal" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">Close</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('regisForm').addEventListener('submit', function(event) {
            const startDate = new Date(document.getElementById('registration_start_date').value);
            const endDate = new Date(document.getElementById('registration_end_date').value);

            if (startDate > endDate) {
                event.preventDefault();
                document.getElementById('errorModal').classList.remove('hidden');
            }
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('errorModal').classList.add('hidden');
        });
    </script>
</x-layouts.admin>
