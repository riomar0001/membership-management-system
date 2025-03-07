<x-layouts.admin>
    <div class="px-4 py-5 sm:px-6 lg:px-5 lg:py-5 mx-auto bg-white dark:bg-neutral-900 rounded-xl shadow-xs">
        <a href="{{ route('accounts.index') }}"
            class="py-2 px-3 mb-5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-arrow-left">
                <path d="m12 19-7-7 7-7" />
                <path d="M19 12H5" />
            </svg>
            Go Back
        </a>
        
        <div class="border-b border-gray-200 dark:border-neutral-700 pb-5 sm:pb-6 mb-5 sm:mb-6">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">
                Edit User Information
            </h1>
            <p class="text-sm text-gray-800 dark:text-neutral-200">
                Fill up the form below to update the user information.
            </p>
        </div>

        <div class="max-w-3xl mx-auto p-4 sm:p-7">
            <form action="{{ route('accounts.update', $user->id) }}" method="POST">
                @csrf
                @method('POST')

                <div class="grid sm:grid-cols-8 gap-2 sm:gap-2 first:pt-0 last:pb-0 border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="student_id" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Student ID
                            </label>
                            <input id="student_id" type="text" name="student_id" value="{{ old('student_id', $user->student_id) }}" 
                                placeholder="123456" oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="6"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-1/2 border-gray-200 shadow-2xs rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            @error('student_id')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="first_name" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Full name
                            </label>
                            <div class="sm:flex flex-col">
                                <div class="sm:flex flex-row">
                                    <input id="first_name" type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}" 
                                        placeholder="First Name"
                                        class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg sm:text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $user->last_name) }}" 
                                        placeholder="Last Name"
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
                            <label for="umindanao_email" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Umindanao Email
                            </label>
                            <input id="umindanao_email" type="email" name="umindanao_email" value="{{ old('umindanao_email', $user->umindanao_email) }}" 
                                placeholder="j.delacruz.123456@umindanao.edu.ph"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            @error('umindanao_email')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="program" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Course/Program
                            </label>
                            <select name="program" id="program"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option value="">Select Program</option>
                                <option value="Bachelor of Science in Information Technology" 
                                    {{ old('program', $user->program) == 'Bachelor of Science in Information Technology' ? 'selected' : '' }}>
                                    Bachelor of Science in Information Technology</option>
                                <option value="Bachelor of Science in Computer Science"
                                    {{ old('program', $user->program) == 'Bachelor of Science in Computer Science' ? 'selected' : '' }}>
                                    Bachelor of Science in Computer Science</option>
                                <option value="Bachelor of Science in Information Systems"
                                    {{ old('program', $user->program) == 'Bachelor of Science in Information Systems' ? 'selected' : '' }}>
                                    Bachelor of Science in Information Systems</option>
                                <option value="Bachelor of Library and Information Science"
                                    {{ old('program', $user->program) == 'Bachelor of Library and Information Science' ? 'selected' : '' }}>
                                    Bachelor of Library and Information Science</option>
                                <option value="Bachelor of Science in Entertainment and Multimedia Computing – Digital Animation"
                                    {{ old('program', $user->program) == 'Bachelor of Science in Entertainment and Multimedia Computing – Digital Animation' ? 'selected' : '' }}>
                                    Bachelor of Science in Entertainment and Multimedia Computing – Digital Animation
                                </option>
                                <option value="Bachelor of Science in Entertainment and Multimedia Computing – Game Development"
                                    {{ old('program', $user->program) == 'Bachelor of Science in Entertainment and Multimedia Computing – Game Development' ? 'selected' : '' }}>
                                    Bachelor of Science in Entertainment and Multimedia Computing – Game Development
                                </option>
                                <option value="Bachelor of Multimedia Arts"
                                    {{ old('program', $user->program) == 'Bachelor of Multimedia Arts' ? 'selected' : '' }}>
                                    Bachelor of Multimedia Arts
                                </option>
                            </select>
                            @error('program')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="year_level" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Year Level
                            </label>
                            <select name="year_level" id="year_level"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option value="">Select Year Level</option>
                                <option value="1" {{ old('year_level', $user->year_level) == '1' ? 'selected' : '' }}>1st Year</option>
                                <option value="2" {{ old('year_level', $user->year_level) == '2' ? 'selected' : '' }}>2nd Year</option>
                                <option value="3" {{ old('year_level', $user->year_level) == '3' ? 'selected' : '' }}>3rd Year</option>
                                <option value="4" {{ old('year_level', $user->year_level) == '4' ? 'selected' : '' }}>4th Year</option>
                            </select>
                            @error('year_level')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="position" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Position
                            </label>
                            <input id="position" type="text" name="position" value="{{ old('position', $user->position) }}"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            @error('position')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="role" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Role
                            </label>
                            <select name="role" id="role"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option value="">Select Role</option>
                                <option value="president" {{ old('role', $user->role) === 'president' ? 'selected' : '' }}>President</option>
                                <option value="officer" {{ old('role', $user->role) === 'officer' ? 'selected' : '' }}>Officer</option>
                                <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                            @error('role')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-8 mt-4">
                        <div class="flex flex-col gap-y-2">
                            <label class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Password Management
                            </label>
                            <div class="bg-yellow-50 border border-yellow-300 p-4 rounded-lg">
                                <a href="{{ route('accounts.reset-password', $user->id) }}" 
                                   class="inline-flex items-center gap-x-2 py-2 px-4 text-white bg-yellow-500 rounded-lg hover:bg-yellow-600"
                                   onclick="return confirm('Are you sure you want to reset this user\'s password to the default?');">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"/><path d="M3 21v-5h5"/></svg>
                                    Reset Password
                                </a>
                                <p class="text-sm text-gray-600 mt-2">This will reset the user's password</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <button type="submit" 
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Update User
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.admin>