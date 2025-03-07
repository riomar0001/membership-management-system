<x-layouts.admin>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 dark:text-neutral-200">Officers</h1>

        <button type="button" onclick="showAddOfficerModal()" class="px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-700 focus:outline-none focus:bg-yellow-700">Add Officer</button>

        @if ($officers->isEmpty())
            <p class="text-gray-600 dark:text-neutral-400">No officers found.</p>
        @else
            <div class="mt-8">
                <table class="min-w-full bg-white dark:bg-neutral-900">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-800">Student ID</th>
                            <th class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-800">Name</th>
                            <th class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-800">Position</th>
                            <th class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-800">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($officers as $officer)
                            <tr>
                                <td class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-800">{{ $officer->student_id }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-800">{{ $officer->first_name }} {{ $officer->last_name }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-800">{{ $officer->position }}</td>
                                <td class="py-2 px-4 border-b border-gray-200 dark:text-white dark:border-neutral-800 text-end">
                                    <button type="button" title="View" onclick="showOfficerDetails({{ json_encode($officer) }})" class="inline-flex items-center gap-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-chart-gantt"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M9 8h7"/><path d="M8 12h6"/><path d="M11 16h5"/></svg>
                                    </button>
                                    <button type="button" title="Edit" onclick="editOfficerDetails({{ json_encode($officer) }})" class="inline-flex items-center gap-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-pen-line"><path d="m18 5-2.414-2.414A2 2 0 0 0 14.172 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2"/><path d="M21.378 12.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/><path d="M8 18h1"/></svg>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <!-- Officer Details Modal -->
    <div id="officerDetailsModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-8">
            <h2 class="text-xl font-semibold text-gray-800">Officer Details</h2>
            <p id="officerDetailsContent" class="mt-4 text-gray-600"></p>
            <div class="mt-6 text-right">
                <button id="closeOfficerDetailsModal" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">Close</button>
            </div>
        </div>
    </div>

    <!-- Edit Officer Modal -->
    <div id="editOfficerModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-8">
            <h2 class="text-xl font-semibold text-gray-800">Edit Officer</h2>
            <form id="editOfficerForm" method="POST" action="{{ route('officers.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="editOfficerId">
                <div class="mt-4">
                    <label for="editOfficerPosition" class="block text-sm font-medium text-gray-700">Position</label>
                    <input type="text" name="position" id="editOfficerPosition" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mt-6 text-right">
                    <button type="button" id="closeEditOfficerModal" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Add Officer Modal -->
    <div id="addOfficerModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-8">
            <h2 class="text-xl font-semibold text-gray-800">Add Officer</h2>
            <form id="addOfficerForm" method="POST" action="{{ route('officers.store') }}">
                @csrf
                <div class="mt-4">
                    <label for="addOfficerStudentId" class="block text-sm font-medium text-gray-700">Student ID</label>
                    <input type="text" name="student_id" id="addOfficerStudentId" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mt-4">
                    <label for="addOfficerPosition" class="block text-sm font-medium text-gray-700">Position</label>
                    <input type="text" name="position" id="addOfficerPosition" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mt-6 text-right">
                    <button type="button" id="closeAddOfficerModal" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:bg-red-700">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700">Add</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function showOfficerDetails(officer) {
            const content = `
                <p><strong>Student ID:</strong> ${officer.student_id}</p>
                <p><strong>Name:</strong> ${officer.first_name} ${officer.last_name}</p>
                <p><strong>Program:</strong> ${officer.program}</p>
                <p><strong>Year Level:</strong> ${officer.year_level}</p>
                <p><strong>Position:</strong> ${officer.position}</p>
            `;
            document.getElementById('officerDetailsContent').innerHTML = content;
            document.getElementById('officerDetailsModal').classList.remove('hidden');
        }

        function editOfficerDetails(officer) {
            document.getElementById('editOfficerId').value = officer.id;
            document.getElementById('editOfficerPosition').value = officer.position;
            document.getElementById('editOfficerModal').classList.remove('hidden');
        }

        function showAddOfficerModal() {
            document.getElementById('addOfficerModal').classList.remove('hidden');
        }

        document.getElementById('closeOfficerDetailsModal').addEventListener('click', function() {
            document.getElementById('officerDetailsModal').classList.add('hidden');
        });

        document.getElementById('closeEditOfficerModal').addEventListener('click', function() {
            document.getElementById('editOfficerModal').classList.add('hidden');
        });

        document.getElementById('closeAddOfficerModal').addEventListener('click', function() {
            document.getElementById('addOfficerModal').classList.add('hidden');
        });
    </script>
</x-layouts.admin>
