<x-layouts.admin>
 <!-- Card Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
    <!-- Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
      <div class="p-4 md:p-5 flex gap-x-4">
        <div class="shrink-0 flex justify-center items-center size-[46px] bg-teal-100 text-teal-800 rounded-lg dark:bg-teal-500/10 dark:text-teal-500">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(0.437 0.078 188.216)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>        </div>

        <div class="grow">
          <div class="flex items-center gap-x-2">
            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
              Registerd Members
            </p>
          </div>
          <div class="mt-1 flex items-center gap-x-2">
            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                {{ $members->where('membership_status', '!=', 'Rejected')->count() }}
            </h3>
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
      <div class="p-4 md:p-5 flex gap-x-4">
        <div class="shrink-0 flex justify-center items-center size-[46px] bg-teal-100 text-teal-800 rounded-lg dark:bg-teal-500/10 dark:text-teal-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(0.437 0.078 188.216)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><polyline points="16 11 18 13 22 9"/></svg>        </div>

        <div class="grow">
          <div class="flex items-center gap-x-2">
            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
              Approved Members
            </p>
          </div>
          <div class="mt-1 flex items-center gap-x-2">
            <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                {{ $members->where('membership_status', 'Approved')->count() }}
            </h3>
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
      <div class="p-4 md:p-5 flex gap-x-4">
        <div class="shrink-0 flex justify-center items-center size-[46px] bg-yellow-100 text-yellow-800 rounded-lg dark:bg-yellow-500/10 dark:text-yellow-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(0.476 0.114 61.907)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" x2="19" y1="8" y2="14"/><line x1="22" x2="16" y1="11" y2="11"/></svg>        </div>

        <div class="grow">
          <div class="flex items-center gap-x-2">
            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
              Pending Approval
            </p>
          </div>
          <div class="mt-1 flex items-center gap-x-2">
            <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                {{ $members->where('membership_status', 'Pending')->count() }}
            </h3>
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
      <div class="p-4 md:p-5 flex gap-x-4">
        <div class="shrink-0 flex justify-center items-center size-[46px] bg-red-100 text-red-800 rounded-lg   dark:bg-red-500/10 dark:text-red-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="oklch(0.444 0.177 26.899)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-800 lucide lucide-user-x"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="17" x2="22" y1="8" y2="13"/><line x1="22" x2="17" y1="8" y2="13"/></svg>
        </div> 

        <div class="grow">
          <div class="flex items-center gap-x-2">
            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
              Rejected Members
            </p>
          </div>
          <div class="mt-1 flex items-center gap-x-2">
            <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                {{ $members->where('membership_status', 'Rejected')->count() }}
            </h3>
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Section -->


    <!-- End Card -->



</x-layouts.admin>
