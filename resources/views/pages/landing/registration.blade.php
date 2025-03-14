<x-layouts.landing>


    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url({{ asset('img/page-title-bg.webp') }});">
        <div class="container position-relative">
            <h1>Become A Member</h1>
            <p>
                Register to Become a Member
            </p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Starter Page</li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="starter-section" class="starter-section section">

        <div class="container section-title max-w-3xl" data-aos="fade-up">
            <h2>Registration</h2>
            <p>Register to Become a Member<br></p>


        </div>

        <div class="container max-w-3xl flex flex-col justify-center" data-aos="fade-up">
            <h5>
                Please fill in all required fields to complete your registration.
            </h5>

            <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div
                    class="grid sm:grid-cols-8 gap-2 sm:gap-2 first:pt-0 last:pb-0 border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="af-submit-application-full-name"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Student ID
                            </label>
                            <input id="af-submit-application-phone" type="text" name="student_id"
                                value="{{ old('student_id') }}" placeholder="123456"
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
                                        value="{{ old('first_name') }}" placeholder="First Name"
                                        class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg sm:text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <input type="text" name="last_name" placeholder="Last Name"
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
                                value="{{ old('umindanao_email') }}" placeholder="j.delacruz.123456@umindanao.edu.ph"
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
                                <option value="" {{ old('program') == '' ? 'selected' : '' }}>Select Program
                                </option>
                                <option value="Bachelor of Science in Information Technology"
                                    {{ old('program') == 'Bachelor of Science in Information Technology' ? 'selected' : '' }}>
                                    Bachelor of Science in Information Technology</option>
                                <option value="Bachelor of Science in Computer Science"
                                    {{ old('program') == 'Bachelor of Science in Computer Science' ? 'selected' : '' }}>
                                    Bachelor of Science in Computer Science</option>
                                <option value="Bachelor of Science in Information Systems"
                                    {{ old('program') == 'Bachelor of Science in Information Systems' ? 'selected' : '' }}>
                                    Bachelor of Science in Information Systems</option>
                                <option value="Bachelor of Library and Information Science"
                                    {{ old('program') == 'Bachelor of Library and Information Science' ? 'selected' : '' }}>
                                    Bachelor of Library and Information Science</option>
                                <option
                                    value="Bachelor of Science in Entertainment and Multimedia Computing – Digital Animation"
                                    {{ old('program') == 'Bachelor of Science in Entertainment and Multimedia Computing – Digital Animation' ? 'selected' : '' }}>
                                    Bachelor of Science in Entertainment and Multimedia Computing – Digital
                                    Animation
                                </option>
                                <option
                                    value="Bachelor of Science in Entertainment and Multimedia Computing – Game Development"
                                    {{ old('program') == 'Bachelor of Science in Entertainment and Multimedia Computing – Game Development' ? 'selected' : '' }}>
                                    Bachelor of Science in Entertainment and Multimedia Computing – Game Development
                                </option>
                                <option value="Bachelor of Multimedia Arts"
                                    {{ old('program') == 'Bachelor of Multimedia Arts' ? 'selected' : '' }}>
                                    Bachelor of
                                    Multimedia Arts</option>
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
                                <option value="" {{ old('year_level') == '' ? 'selected' : '' }}>Select Year
                                    Level</option>
                                <option value="1" {{ old('year_level') == '1' ? 'selected' : '' }}>1st Year
                                </option>
                                <option value="2" {{ old('year_level') == '2' ? 'selected' : '' }}>2nd Year
                                </option>
                                <option value="3" {{ old('year_level') == '3' ? 'selected' : '' }}>3rd Year
                                </option>
                                <option value="4" {{ old('year_level') == '4' ? 'selected' : '' }}>4th Year
                                </option>
                            </select>
                            @error('year_level')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>



                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="af-submit-application-resume-cv"
                                class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-300 mt-2.5">
                                Proof of Membership
                            </label>
                            <div>
                                <label for="proof_of_membership" class="sr-only">Choose file</label>
                                <input type="file" name="proof_of_membership" id="proof_of_membership"
                                    value="{{ old('proof_of_membership') }}" uri="{{ old('proof_of_membership') }}"
                                    class="block w-full border border-gray-200 shadow-sm  rounded-lg sm:text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                          file:bg-gray-50 file:border-0 file:me-4 file:py-2 file:px-4 dark:file:bg-neutral-700 dark:file:text-neutral-400">
                            </div>
                            @error('proof_of_membership')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>



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

                <button type="submit"
                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Register
                </button>

            </form>
        </div>

    </section>
</x-layouts.landing>
