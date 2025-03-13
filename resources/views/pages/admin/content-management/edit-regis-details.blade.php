<x-layouts.admin>
    <div class="px-4 py-5 sm:px-6 lg:px-5 lg:py-5 mx-auto bg-white dark:bg-neutral-900 rounded-xl shadow-xs">
        <a href="{{ route('regis-details') }}"
            class="py-2 px-3 mb-5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-arrow-left">
                <path d="m12 19-7-7 7-7" />
                <path d="M19 12H5" />
            </svg>
            Go Back
        </a>
        
        <div class="border-b border-gray-200 dark:border-neutral-700 pb-5 sm:pb-6 mb-5 sm:mb-6">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">
                Edit Registration Details
            </h1>
            <p class="text-sm text-gray-800 dark:text-neutral-200">
                Update the organization's registration details below.
            </p>
        </div>

        <div class="max-w-3xl mx-auto p-4 sm:p-7">
            <form id="regisForm" action="{{ route('regis-details.store', $id) }}" method="POST">
                @csrf
                @method('POST')
                
                <div class="grid sm:grid-cols-8 gap-2 sm:gap-2 first:pt-0 last:pb-0 border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="membership_fee" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Membership Fee
                            </label>
                            <input id="membership_fee" type="number" name="membership_fee" value="{{ old('membership_fee', $membership_fee) }}" placeholder="Enter membership fee"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <div id="membership_fee_error" class="text-red-500 text-xs hidden">Membership fee cannot be negative.</div>
                            @error('membership_fee')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="registration_start_date" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Registration Start Date
                            </label>
                            <input id="registration_start_date" type="date" name="registration_start_date" value="{{ old('registration_start_date', $registration_start_date) }}"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            @error('registration_start_date')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="registration_end_date" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Registration End Date
                            </label>
                            <input id="registration_end_date" type="date" name="registration_end_date" value="{{ old('registration_end_date', $registration_end_date) }}"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            @error('registration_end_date')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <button type="submit"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-yellow-600 text-white hover:bg-yellow-700 focus:outline-hidden focus:bg-yellow-700 disabled:opacity-50 disabled:pointer-events-none">
                        Update Registration Details
                    </button>
                </div>
            </form>
        </div>
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

            document.getElementById('membership_fee').addEventListener('input', function() {
                const feeValue = parseFloat(this.value);
                const errorElement = document.getElementById('membership_fee_error');
                
                if (feeValue < 0) {
                    errorElement.classList.remove('hidden');
                    this.classList.add('border-red-500');
                    document.querySelector('button[type="submit"]').disabled = true;
                } else {
                    errorElement.classList.add('hidden');
                    this.classList.remove('border-red-500');
                    document.querySelector('button[type="submit"]').disabled = false;
                }
            });
            
            // Also check on form submission
            document.getElementById('regisForm').addEventListener('submit', function(event) {
                const feeValue = parseFloat(document.getElementById('membership_fee').value);
                const startDate = new Date(document.getElementById('registration_start_date').value);
                const endDate = new Date(document.getElementById('registration_end_date').value);
            
                let hasErrors = false;
            
                if (feeValue < 0) {
                    document.getElementById('membership_fee_error').classList.remove('hidden');
                    document.getElementById('membership_fee').classList.add('border-red-500');
                    hasErrors = true;
                }
            
                if (startDate > endDate) {
                    document.getElementById('errorModal').classList.remove('hidden');
                    hasErrors = true;
                }
            
                if (hasErrors) {
                    event.preventDefault();
                }
            });
        });
    </script>
</x-layouts.admin>