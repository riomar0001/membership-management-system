<x-layouts.admin>

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
                Edit Members Information
            </h1>
            <p class="text-sm  text-gray-800 dark:text-neutral-200">
                Fill up the form below to update the members information.
            </p>

        </div>
        <div class=" max-w-3xl mx-auto p-4 sm:p-7 ">
            <form method="POST" action="{{ route('members.update', $member->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div
                    class="grid sm:grid-cols-8 gap-2 sm:gap-2 first:pt-0 last:pb-0 border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="af-submit-application-full-name"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Student ID
                            </label>
                            <input id="af-submit-application-phone" type="text" name="student_id"
                                value="{{ $member->student_id }}" placeholder="123456"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="6"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-1/2 border-gray-200 shadow-2xs rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            @error('student_id')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="af-submit-application-full-name"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Full name
                            </label>
                            <div class="sm:flex flex-col">
                                <div class="sm:flex flex-row">
                                    <input id="af-submit-application-full-name" type="text" name="first_name"
                                        value="{{ $member->first_name }}" placeholder="First Name"
                                        class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg sm:text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <input type="text" name="last_name" placeholder="Last Name"
                                        value="{{ $member->last_name }}"
                                        class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg sm:text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                </div>
                                <div class="flex flex-row gap-y-2">
                                    @if ($errors->hasAny(['first_name', 'last_name']))
                                        <div class="text-red-500 text-xs">
                                            {{ $errors->first('first_name') ?? $errors->first('last_name') }}
                                        </div>
                                    @endif

                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="af-submit-application-email"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Umindanao Email
                            </label>
                            <input id="af-submit-application-email" type="email" name="umindanao_email"
                                value="{{ $member->umindanao_email }}" placeholder="j.delacruz.123456@umindanao.edu.ph"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            @error('umindanao_email')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>




                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="program"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Course/Program
                            </label>
                            <select name="program" id="program"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option value="">Select Program</option>
                                <option value="Bachelor of Science in Information Technology"
                                    {{ $member->program == 'Bachelor of Science in Information Technology' ? 'selected' : '' }}>
                                    Bachelor of Science in Information Technology</option>
                                <option value="Bachelor of Science in Computer Science"
                                    {{ $member->program == 'Bachelor of Science in Computer Science' ? 'selected' : '' }}>
                                    Bachelor of Science in Computer Science</option>
                                <option value="Bachelor of Science in Information Systems"
                                    {{ $member->program == 'Bachelor of Science in Information Systems' ? 'selected' : '' }}>
                                    Bachelor of Science in Information Systems</option>
                                <option value="Bachelor of Library and Information Science"
                                    {{ $member->program == 'Bachelor of Library and Information Science' ? 'selected' : '' }}>
                                    Bachelor of Library and Information Science</option>
                                <option
                                    value="Bachelor of Science in Entertainment and Multimedia Computing – Digital Animation"
                                    {{ $member->program == 'Bachelor of Science in Entertainment and Multimedia Computing – Digital Animation' ? 'selected' : '' }}>
                                    Bachelor of Science in Entertainment and Multimedia Computing – Digital Animation
                                </option>
                                <option
                                    value="Bachelor of Science in Entertainment and Multimedia Computing – Game Development"
                                    {{ $member->program == 'Bachelor of Science in Entertainment and Multimedia Computing – Game Development' ? 'selected' : '' }}>
                                    Bachelor of Science in Entertainment and Multimedia Computing – Game Development
                                </option>
                                <option value="Bachelor of Multimedia Arts"
                                    {{ $member->program == 'Bachelor of Multimedia Arts' ? 'selected' : '' }}>Bachelor
                                    of Multimedia Arts</option>
                            </select>

                            @error('program')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="year_level"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Year Level
                            </label>
                            <select name="year_level" id="year_level"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option value="" selected>Select Year Level</option>
                                <option value="1" {{ $member->year_level == '1' ? 'selected' : '' }}>1st Year
                                </option>
                                <option value="2" {{ $member->year_level == '2' ? 'selected' : '' }}>2nd Year
                                </option>
                                <option value="3" {{ $member->year_level == '3' ? 'selected' : '' }}>3rd Year
                                </option>
                                <option value="4" {{ $member->year_level == '4' ? 'selected' : '' }}>4th Year
                                </option>
                            </select>
                            @error('year_level')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>



                    <div class="sm:col-span-8" x-data="{ viewProofOfMembershipModal: false }">
                        <div class="flex flex-col gap-y-2">
                            <label for="af-submit-application-resume-cv"
                                class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-300 mt-2.5">
                                Proof of Membership
                            </label>

                            @if ($member->proof_of_membership)
                                <div class="mb-2">
                                    <p class="text-sm text-gray-600 dark:text-neutral-400">Current file:
                                        <button type="button" x-on:click="viewProofOfMembershipModal = true"
                                            class="text-blue-600 hover:underline">
                                            View current proof of membership
                                        </button>
                                    </p>

                                    @include('pages.admin.members.view-membership-proof-modal')
                                </div>
                            @endif

                            <div>
                                <label for="proof_of_membership" class="sr-only">Choose file</label>
                                <input type="file" name="proof_of_membership" id="proof_of_membership"
                                    class="block w-full border border-gray-200 shadow-sm rounded-lg sm:text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                                    file:bg-gray-50 file:border-0 file:me-4 file:py-2 file:px-4 dark:file:bg-neutral-700 dark:file:text-neutral-400">
                                <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">Leave empty to keep current
                                    file</p>
                            </div>
                            @error('proof_of_membership')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>



                <div x-data="{ termsAndConditionModal: false }"
                    class="py-8 my-10 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
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

                <button type="submit"
                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Register Member
                </button>

            </form>
        </div>

    </div>



</x-layouts.admin>
