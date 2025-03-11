    <section id="registration" class="bg-neutral-100 dark:bg-neutral-950 py-20">
    <x-landing.nav />

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <div class="max-w-3xl mx-auto p-8  dark:bg-neutral-800 shadow-lg rounded-xl mt-10">
        <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-white mb-6">Membership Registration</h2>
        
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('member.register') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Student ID -->
                <div>
                    <label for="student_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Student ID <span class="text-red-600">*</span></label>
                    <input 
                        type="number" 
                        id="student_id" 
                        name="student_id" 
                        value="{{ old('student_id') }}" 
                        class="py-3 px-4 block w-full border-gray-200 dark:border-neutral-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:text-neutral-200 dark:focus:ring-neutral-600"
                        placeholder="Enter your student ID"
                        required
                    >
                    @error('student_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- University Email -->
                <div>
                    <label for="umindanao_email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">University Email <span class="text-red-600">*</span></label>
                    <input 
                        type="email" 
                        id="umindanao_email" 
                        name="umindanao_email" 
                        value="{{ old('umindanao_email') }}" 
                        class="py-3 px-4 block w-full border-gray-200 dark:border-neutral-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:text-neutral-200 dark:focus:ring-neutral-600"
                        placeholder="firstname.lastname.123456@umindanao.edu.ph"
                        required
                    >
                    <p class="mt-1 text-xs text-gray-500 italic">Format: j.delacruz.123456@umindanao.edu.ph</p>
                    @error('umindanao_email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- First Name -->
                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">First Name <span class="text-red-600">*</span></label>
                    <input 
                        type="text" 
                        id="first_name" 
                        name="first_name" 
                        value="{{ old('first_name') }}" 
                        class="py-3 px-4 block w-full border-gray-200 dark:border-neutral-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:text-neutral-200 dark:focus:ring-neutral-600"
                        placeholder="Enter your first name"
                        required
                    >
                    @error('first_name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Last Name -->
                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Last Name <span class="text-red-600">*</span></label>
                    <input 
                        type="text" 
                        id="last_name" 
                        name="last_name" 
                        value="{{ old('last_name') }}" 
                        class="py-3 px-4 block w-full border-gray-200 dark:border-neutral-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:text-neutral-200 dark:focus:ring-neutral-600"
                        placeholder="Enter your last name"
                        required
                    >
                    @error('last_name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Program -->
                <div>
                    <label for="program" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Program <span class="text-red-600">*</span></label>
                    <select 
                        id="program" 
                        name="program" 
                        class="py-3 px-4 block w-full border-gray-200 dark:border-neutral-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:text-neutral-200 dark:focus:ring-neutral-600"
                        required
                    >
                        <option value="" disabled {{ old('program') ? '' : 'selected' }}>Select your program</option>
                        <option value="BSCS" {{ old('program') == 'BSCS' ? 'selected' : '' }}>BS Computer Science</option>
                        <option value="BSIT" {{ old('program') == 'BSIT' ? 'selected' : '' }}>BS Information Technology</option>
                        <option value="BSIS" {{ old('program') == 'BSIS' ? 'selected' : '' }}>BS Information Systems</option>
                        <option value="BSCE" {{ old('program') == 'BSCE' ? 'selected' : '' }}>BS Computer Engineering</option>
                        <option value="BSMath" {{ old('program') == 'BSMath' ? 'selected' : '' }}>BS Mathematics</option>
                    </select>
                    @error('program')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Year Level -->
                <div>
                    <label for="year_level" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Year Level <span class="text-red-600">*</span></label>
                    <select 
                        id="year_level" 
                        name="year_level" 
                        class="py-3 px-4 block w-full border-gray-200 dark:border-neutral-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:text-neutral-200 dark:focus:ring-neutral-600"
                        required
                    >
                        <option value="" disabled {{ old('year_level') ? '' : 'selected' }}>Select your year level</option>
                        <option value="1" {{ old('year_level') == '1' ? 'selected' : '' }}>1st Year</option>
                        <option value="2" {{ old('year_level') == '2' ? 'selected' : '' }}>2nd Year</option>
                        <option value="3" {{ old('year_level') == '3' ? 'selected' : '' }}>3rd Year</option>
                        <option value="4" {{ old('year_level') == '4' ? 'selected' : '' }}>4th Year</option>
                        <option value="5" {{ old('year_level') == '5' ? 'selected' : '' }}>5th Year</option>
                    </select>
                    @error('year_level')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <!-- Membership Type -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Membership Type <span class="text-red-600">*</span></label>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-2">
                    <div class="flex">
                        <input 
                            type="radio" 
                            id="membership_type_new" 
                            name="membership_type" 
                            value="New" 
                            {{ old('membership_type', 'New') == 'New' ? 'checked' : '' }}
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-neutral-800"
                            required
                        >
                        <label for="membership_type_new" class="text-sm text-gray-500 ml-2 dark:text-neutral-400">New Member</label>
                    </div>
                    <div class="flex">
                        <input 
                            type="radio" 
                            id="membership_type_old" 
                            name="membership_type" 
                            value="Old" 
                            {{ old('membership_type') == 'Old' ? 'checked' : '' }}
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-neutral-800"
                        >
                        <label for="membership_type_old" class="text-sm text-gray-500 ml-2 dark:text-neutral-400">Old Member</label>
                    </div>
                    <div class="flex">
                        <input 
                            type="radio" 
                            id="membership_type_volunteer" 
                            name="membership_type" 
                            value="Volunteer" 
                            {{ old('membership_type') == 'Volunteer' ? 'checked' : '' }}
                            class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-neutral-800"
                        >
                        <label for="membership_type_volunteer" class="text-sm text-gray-500 ml-2 dark:text-neutral-400">Volunteer</label>
                    </div>
                </div>
                @error('membership_type')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Proof of Membership -->
            <div>
                <label for="proof_of_membership" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Proof of Membership <span class="text-red-600">*</span></label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md dark:border-neutral-700">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600 dark:text-neutral-400">
                            <label for="proof_of_membership" class="relative cursor-pointer bg-white dark:bg-neutral-800 rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500 dark:text-blue-400">
                                <span>Upload a file</span>
                                <input id="proof_of_membership" name="proof_of_membership" type="file" class="sr-only" accept="image/*, application/pdf" required>
                            </label>
                            <p class="pl-1 dark:text-neutral-400">or drag and drop</p>
                        </div>
                        <p class="text-xs text-gray-500 dark:text-neutral-500">PNG, JPG, PDF up to 2MB</p>
                    </div>
                </div>
                <p class="mt-1 text-xs text-gray-500 dark:text-neutral-500 italic">Please upload your proof of payment receipt for membership fee</p>
                @error('proof_of_membership')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Terms and Conditions -->
            <div class="flex items-start">
                <div class="flex h-5 items-center">
                    <input 
                        id="accept_terms_and_conditions" 
                        name="accept_terms_and_conditions" 
                        type="checkbox" 
                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700"
                        required
                        {{ old('accept_terms_and_conditions') ? 'checked' : '' }}
                    >
                </div>
                <div class="ml-3 text-sm">
                    <label for="accept_terms_and_conditions" class="font-medium text-gray-700 dark:text-gray-300">Agree to terms and conditions <span class="text-red-600">*</span></label>
                    <p class="text-gray-500 dark:text-neutral-400">I agree to the <a href="#" class="text-blue-600 hover:underline dark:text-blue-400">terms of service</a> and <a href="#" class="text-blue-600 hover:underline dark:text-blue-400">privacy policy</a>.</p>
                </div>
            </div>
            @error('accept_terms_and_conditions')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
            
            <!-- Submit Button -->
            <div>
                <button type="submit" class="py-3 px-4 w-full inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-yellow-600 text-white hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                    Register for Membership
                </button>
            </div>
            
            <div class="text-center text-sm text-gray-500 dark:text-gray-400">
                <p>Need help? Contact us at <a href="mailto:support@organization.org" class="text-blue-600 hover:underline dark:text-blue-400">support@organization.org</a></p>
            </div>
        </form>
    </div>
    </section>
    
