<x-layouts.admin>
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
        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700 border">
            @foreach ($members as $member)
                <tr>
                    <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                        {{ $member->student_id }}
                    </td>
                    <td class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                        {{ $member->first_name }} {{ $member->last_name }}
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
                        <button type="button"
                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layouts.admin>
