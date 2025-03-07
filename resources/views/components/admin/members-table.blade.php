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

                <th scope="col"
                    class="py-2 text-center font-normal text-sm text-gray-500 --exclude-from-ordering dark:text-neutral-500">
                    Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 dark:divide-neutral-800">
            @foreach ($members as $member)
                <tr class="hover:bg-gray-50 dark:hover:bg-neutral-800 cursor-pointer">
                    <td onclick="window.location='{{ route('members.show', $member->id) }}'"
                        class="p-3 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200 rounded-lg">
                        {{ $member->student_id }}
                    </td>
                    <td onclick="window.location='{{ route('members.show', $member->id) }}'"
                        class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200 ">
                        {{ $member->first_name }} {{ $member->last_name }}
                    </td>
                    <td onclick="window.location='{{ route('members.show', $member->id) }}'"
                        class="p-3 whitespace-nowrap text-sm dark:text-neutral-200 ">
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
                    <td onclick="window.location='{{ route('members.show', $member->id) }}'"
                        class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200 ">
                        {{ $member->reviewed_by }}
                    </td>
                    <td onclick="window.location='{{ route('members.show', $member->id) }}'"
                        class="p-3 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200 ">
                        {{ $member->registered_at }}
                    </td>

                    <td class="p-3 whitespace-nowrap flex flex-row justify-end font-medium">
                        <div x-data="{ viewMemberModalIsOpen: false }">
                            <button x-on:click="viewMemberModalIsOpen = true" type="button">
                                <span class="py-1.5">
                                    <span
                                        class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-lg border border-gray-200 font-medium bg-white text-gray-700 shadow-2xs align-middle hover:bg-gray-50 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-yellow-600 transition-all text-sm dark:bg-neutral-950 dark:hover:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                            <path
                                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                        </svg>
                                        View
                                    </span>
                                </span>
                            </button>

                            @include('pages.admin.members.view-modal', ['member' => $member])

                            <a href="{{ route('members.edit', $member->id) }}">
                                <span class="py-1.5">
                                    <span
                                        class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-lg border border-gray-200 font-medium bg-white text-gray-700 shadow-2xs align-middle hover:bg-gray-50 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-yellow-600 transition-all text-sm dark:bg-neutral-950 dark:hover:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-pencil">
                                            <path
                                                d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                            <path d="m15 5 4 4" />
                                        </svg>
                                        Edit
                                    </span>
                                </span>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <x-admin.datatables.datatable-footer />



</x-admin.datatables.datatable-layout>
