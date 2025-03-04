<x-admin.datatables.datatable-layout>

    <x-admin.datatables.datatable-header />

    <table class="min-w-full">
        <thead class="border-y border-gray-200 dark:border-neutral-700">
            <tr>
                <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                    <div
                        class="cursor-pointer py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                        Student ID
                        <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                d="m7 15 5 5 5-5"></path>
                            <path
                                class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                d="m7 9 5-5 5 5"></path>
                        </svg>
                    </div>
                </th>

                <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                    <div
                        class="cursor-pointer py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                        Members Name
                        <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                d="m7 15 5 5 5-5"></path>
                            <path
                                class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                d="m7 9 5-5 5 5"></path>
                        </svg>
                    </div>
                </th>

                <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                    <div
                        class="cursor-pointer py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                        Membership Status
                        <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                d="m7 15 5 5 5-5"></path>
                            <path
                                class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                d="m7 9 5-5 5 5"></path>
                        </svg>
                    </div>
                </th>
                <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                    <div
                        class="cursor-pointer py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                        Reviewed By
                        <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                d="m7 15 5 5 5-5"></path>
                            <path
                                class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                d="m7 9 5-5 5 5"></path>
                        </svg>
                    </div>
                </th>

                <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                    <div
                        class="cursor-pointer py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                        Registered At
                        <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                d="m7 15 5 5 5-5"></path>
                            <path
                                class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                d="m7 9 5-5 5 5"></path>
                        </svg>
                    </div>
                </th>

                <th scope="col"
                    class="py-2 px-3 text-end font-normal text-sm text-gray-500 --exclude-from-ordering dark:text-neutral-500">
                    Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
            @foreach ($members as $member)
                <tr>
                    <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                        {{ $member->student_id }}
                    </td>
                    <td class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                        {{ $member->student_name }}
                    </td>
                    <td class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                        {{ $member->membership_status ?? 'Pending' }}
                    </td>
                    <td class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                        {{ $member->reviewed_by }}
                    </td>
                    <td class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                        {{ $member->registered_at }}
                    </td>
                    <td class="p-3 whitespace-nowrap text-end text-sm font-medium">
                        <button type="button" title="View" onclick="showMemberDetails({{ json_encode($member) }})"
                            class="inline-flex items-center gap-x-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-chart-gantt"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M9 8h7"/><path d="M8 12h6"/><path d="M11 16h5"/></svg>
                        </button>
                        <button type="button" title="Edit"
                            class="inline-flex items-center gap-x-2  ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-pen-line"><path d="m18 5-2.414-2.414A2 2 0 0 0 14.172 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2"/><path d="M21.378 12.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/><path d="M8 18h1"/></svg>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <x-admin.datatables.datatable-footer />

    @include('pages.admin.members.member-view-modal')

</x-admin.datatables.datatable-layout>