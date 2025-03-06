<x-admin.datatables.datatable-layout>

    <x-admin.datatables.datatable-header />



    <table class="min-w-full">
        <thead class="border-y border-gray-200 dark:border-neutral-800">
            <tr>
                <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                    <div
                        class="cursor-pointer py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-800">
                        Student ID
                        <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                class="hs-datatable-ordering-desc:text-yellow-600 dark:hs-datatable-ordering-desc:text-yellow-500"
                                d="m7 15 5 5 5-5"></path>
                            <path
                                class="hs-datatable-ordering-asc:text-yellow-600 dark:hs-datatable-ordering-asc:text-yellow-500"
                                d="m7 9 5-5 5 5"></path>
                        </svg>
                    </div>
                </th>

                <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                    <div
                        class="cursor-pointer py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 dark:text-neutral-500 rounded-md hover:border-gray-200  dark:hover:border-neutral-800">
                        Members Name
                        <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                class="hs-datatable-ordering-desc:text-yellow-600 dark:hs-datatable-ordering-desc:text-yellow-500"
                                d="m7 15 5 5 5-5"></path>
                            <path
                                class="hs-datatable-ordering-asc:text-yellow-600 dark:hs-datatable-ordering-asc:text-yellow-500"
                                d="m7 9 5-5 5 5"></path>
                        </svg>
                    </div>
                </th>

                <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                    <div
                        class="cursor-pointer py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-800">
                        Membership Status
                        <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                class="hs-datatable-ordering-desc:text-yellow-600 dark:hs-datatable-ordering-desc:text-yellow-500"
                                d="m7 15 5 5 5-5"></path>
                            <path
                                class="hs-datatable-ordering-asc:text-yellow-600 dark:hs-datatable-ordering-asc:text-yellow-500"
                                d="m7 9 5-5 5 5"></path>
                        </svg>
                    </div>
                </th>
                <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                    <div
                        class="cursor-pointer py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-800">
                        Reviewed By
                        <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                class="hs-datatable-ordering-desc:text-yellow-600 dark:hs-datatable-ordering-desc:text-yellow-500"
                                d="m7 15 5 5 5-5"></path>
                            <path
                                class="hs-datatable-ordering-asc:text-yellow-600 dark:hs-datatable-ordering-asc:text-yellow-500"
                                d="m7 9 5-5 5 5"></path>
                        </svg>
                    </div>
                </th>

                <th scope="col" class="py-1 group text-start font-normal focus:outline-none">
                    <div
                        class="cursor-pointer py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-800">
                        Registered At
                        <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                class="hs-datatable-ordering-desc:text-yellow-600 dark:hs-datatable-ordering-desc:text-yellow-500"
                                d="m7 15 5 5 5-5"></path>
                            <path
                                class="hs-datatable-ordering-asc:text-yellow-600 dark:hs-datatable-ordering-asc:text-yellow-500"
                                d="m7 9 5-5 5 5"></path>
                        </svg>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-neutral-800">
            @foreach ($members as $member)
                <tr>
                    <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                        {{ $member->student_id }}
                    </td>
                    <td class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                        {{ $member->student_name }}
                    </td>
                    <td class="p-3 whitespace-nowrap text-sm dark:text-neutral-200">
                        @php
                            $statusStyles = [
                                'Pending' =>
                                    'py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-orange-100 text-orange-800 rounded-full dark:bg-orange-500/10 dark:text-orange-500',
                                'Rejected' =>
                                    'py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500',
                                'Approved' =>
                                    'py-1 px-2 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500',
                                'default' => 'text-neutral-800',
                            ];

                            $status = $member->membership_status ?? 'Pending';
                            $className = $statusStyles[$status] ?? $statusStyles['default'];

                        @endphp
                        <span class="{{ $className }}">
                            {{ $status }}
                        </span>
                    </td>
                    <td class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                        {{ $member->reviewed_by }}
                    </td>
                    <td class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                        {{ $member->registered_at }}
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <x-admin.datatables.datatable-footer />



</x-admin.datatables.datatable-layout>
