<x-layouts.admin>
    <!-- Card Section -->
    <div class="px-4 py-5 sm:px-6 lg:px-5 lg:py-5 mx-auto bg-white dark:bg-neutral-900 rounded-xl shadow-xs">
        <a href="{{ route('members.index') }}"
            class="py-2 px-3 mb-5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">

            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-arrow-left">
                <path d="m12 19-7-7 7-7" />
                <path d="M19 12H5" />
            </svg>
            Go Back
        </a>
        <div class="border-b border-gray-200 dark:border-neutral-700 pb-5 sm:pb-6 mb-5 sm:mb-6 ">
            <h1 class="text-2xl font-semibold  text-gray-800 dark:text-neutral-200">
                Edit Member's Information
            </h1>
            <p class="text-sm  text-gray-800 dark:text-neutral-200">
                Update member details and approve or reject the membership
                application.
            </p>

        </div>
        <!-- Card -->
        <div class=" max-w-3xl mx-auto p-4 sm:p-7 ">
            <form>
                <!-- Section -->
                <div
                    class="grid sm:grid-cols-8 gap-2 sm:gap-2 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="af-submit-application-full-name"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Student ID
                            </label>
                            <input id="af-submit-application-phone" type="text" name="student_id"
                                placeholder="123456" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-1/2 border-gray-200 shadow-2xs rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        </div>
                    </div>

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="af-submit-application-full-name"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Full name
                            </label>
                            <div class="sm:flex">
                                <input id="af-submit-application-full-name" type="text" name="first_name"
                                    placeholder="First Name"
                                    class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg sm:text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <input type="text" name="last_name" placeholder="Last Name"
                                    class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg sm:text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            </div>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="af-submit-application-email"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Umindanao Email
                            </label>
                            <input id="af-submit-application-email" type="email" name="umindanao_email"
                                placeholder="j.delacruz.123456@umindanao.edu.ph"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">

                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-8">

                        <div class="flex flex-col gap-y-2">
                            <label for="af-submit-application-email"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Course/Program
                            </label>
                            <select name="program" id="program" default="" name="program"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option selected>Select Program</option>
                                <option value="Bachelor of Science in Information Technology">Bachelor of Science in
                                    Information Technology</option>
                                <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer
                                    Science</option>
                                <option value="Bachelor of Science in Information Systems">Bachelor of Science in
                                    Information Systems</option>
                                <option value="Bachelor of Library and Information Science">Bachelor of Library and
                                    Information Science</option>
                                <option
                                    value="Bachelor of Science in Entertainment and Multimedia Computing – Digital Animation">
                                    Bachelor of Science in Entertainment and Multimedia Computing – Digital Animation
                                </option>
                                <option
                                    value="Bachelor of Science in Entertainment and Multimedia Computing – Game Development">
                                    Bachelor of Science in Entertainment and Multimedia Computing – Game Development
                                </option>
                                <option value="Bachelor of Multimedia Arts">Bachelor of Multimedia Arts</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">

                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="af-submit-application-resume-cv"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300 mt-2.5">
                                Resume/CV
                            </label>
                            <div>
                                <label for="af-submit-application-resume-cv" class="sr-only">Choose file</label>
                                <input type="file" name="af-submit-application-resume-cv"
                                    id="af-submit-application-resume-cv"
                                    class="block w-full border border-gray-200 shadow-sm  rounded-lg sm:text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                              file:bg-gray-50 file:border-0
                              file:bg-gray-100 file:me-4
                              file:py-2 file:px-4
                              dark:file:bg-neutral-700 dark:file:text-neutral-400">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Section -->

                <!-- Section -->
                <div x-data="{ termsAndConditionModal: false }"
                    class="py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                    <div class="lex space-x-2">
                        <input type="checkbox" name="accept_terms_and_conditions" value="true"
                            class="shrink-0 mt-0.5 border-gray-300 rounded-sm text-blue-600 checked:border-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                            id="af-submit-application-privacy-check">
                        <label for="af-submit-application-privacy-check"
                            class="text-sm text-gray-600 dark:text-neutral-100">
                            Accept&nbsp;<button type="button" x-on:click="termsAndConditionModal = true"
                                class="hover:underline">Terms and
                                Conditions and Privacy Policy</button>
                        </label>
                        @error('accept_terms_and_conditions')
                            <div class="text-red-500 text-xs pl-5">{{ $message }}</div>
                        @enderror

                    </div>

                    @include('pages.admin.members.terms-and-condition-modal')
                </div>

                <button type="button"
                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Update Members Information
                </button>

            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
    <!-- resources/views/components/dark-mode-toggle.blade.php -->



</x-layouts.admin>
