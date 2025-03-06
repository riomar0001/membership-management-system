 <x-layouts.admin>
     <div class="px-4 sm:px-6 lg:p-5 rounded-xl ">
         <div class="-m-1.5 overflow-x-auto rounded-xl">
             <div class="p-1.5 min-w-full inline-block align-middle rounded-xl ">
                 <div
                     class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-800 p-5">
                     <!-- Header -->
                     <div
                         class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-800 rounded-xl ">
                         <div>
                             <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                 Registered Members
                             </h2>
                             <p class="text-sm text-gray-600 dark:text-neutral-400">
                                 List of all registered members
                             </p>
                         </div>

                         <div>
                             <div class="inline-flex gap-x-2">
                                 <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                     href="{{ route('members.create') }}">
                                     <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                         <path d="M5 12h14" />
                                         <path d="M12 5v14" />
                                     </svg>
                                     Add Member
                                 </a>
                             </div>
                         </div>
                     </div>
                     <!-- End Header -->

                     @include('components.admin.members-table', ['members' => $members])
                 </div>
             </div>
         </div>
     </div>

 </x-layouts.admin>
