  <!-- Modal -->
    <div id="memberDetailsModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="relative w-full max-w-2xl p-6 bg-white rounded-lg shadow-lg dark:bg-neutral-800">
                <div class="flex justify-between items-center pb-4 border-b border-gray-200 dark:border-neutral-700">
                    <h3 class="text-lg font-medium text-gray-800 dark:text-neutral-200">Member Details</h3>
                    <button type="button" onclick="closeModal()" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-4">
                    <p><strong>Student ID:</strong> <span id="modalStudentId"></span></p>
                    <p><strong>Member Name:</strong> <span id="modalStudentName"></span></p>
                    <p><strong>Membership Status:</strong> <span id="modalMembershipStatus"></span></p>
                    <p><strong>Reviewed By:</strong> <span id="modalReviewedBy"></span></p>
                    <p><strong>Registered At:</strong> <span id="modalRegisteredAt"></span></p>
                </div>
                <div class="mt-6 text-right">
                    <button type="button" onclick="closeModal()" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showMemberDetails(member) {
            document.getElementById('modalStudentId').textContent = member.student_id;
            document.getElementById('modalStudentName').textContent = member.student_name;
            document.getElementById('modalMembershipStatus').textContent = member.membership_status ?? 'Pending';
            document.getElementById('modalReviewedBy').textContent = member.reviewed_by;
            document.getElementById('modalRegisteredAt').textContent = member.registered_at;
            document.getElementById('memberDetailsModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('memberDetailsModal').classList.add('hidden');
        }
    </script>