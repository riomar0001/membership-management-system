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
                        class="py-3 px-4 block w-full border-gray-200 dark:border-neutral-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 dark:bg-neutral-900 dark:text-neutral-200 dark:focus:ring-neutral-600"
                        placeholder="Auto-generated based on your information"
                        readonly
                    >
                    <p class="mt-1 text-xs text-gray-500 italic">Format: firstinitial.lastname.studentid@umindanao.edu.ph (auto-generated)</p>
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
                    <p class="text-gray-500 dark:text-neutral-400">I agree to the 
                        <button type="button" class="text-blue-600 hover:underline dark:text-blue-400" id="termsLink">terms of service</button> 
                        and 
                        <button type="button" class="text-blue-600 hover:underline dark:text-blue-400" id="privacyLink">privacy policy</button>.
                    </p>    
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
    <div id="termsModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-lg p-8 max-w-3xl w-full max-h-[80vh] overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Terms of Service</h2>
                <button id="closeTermsModal" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            
            <div class="text-gray-700 dark:text-neutral-300 text-sm space-y-4">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">1. Acceptance of Terms</h3>
                <p>By registering for membership in our organization, you agree to be bound by these Terms of Service and all applicable laws and regulations. If you do not agree with any of these terms, you are prohibited from using or accessing our services.</p>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">2. Membership Eligibility</h3>
                <p>Membership is available to all students currently enrolled at the University of Mindanao. You must provide accurate, current, and complete information during the registration process.</p>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">3. Membership Fees</h3>
                <p>Membership fees are non-refundable. Payment of the membership fee is required to activate and maintain your membership status.</p>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">4. Member Conduct</h3>
                <p>Members are expected to conduct themselves professionally and respectfully in all organization activities and communications. Harassment, discrimination, or behavior that violates the university's code of conduct may result in termination of membership.</p>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">5. Termination of Membership</h3>
                <p>We reserve the right to terminate or suspend your membership at any time for any reason, including but not limited to violation of these Terms of Service.</p>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">6. Events and Activities</h3>
                <p>Participation in organization events and activities is voluntary. While we take reasonable precautions to ensure safety, members participate at their own risk.</p>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">7. Intellectual Property</h3>
                <p>Content created for or by the organization remains the property of the organization. Members may not use organization logos, names, or materials without explicit permission.</p>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">8. Modifications to Terms</h3>
                <p>We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting, and continued membership constitutes acceptance of the modified terms.</p>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">9. Governing Law</h3>
                <p>These Terms shall be governed by the laws of the Philippines without regard to its conflict of law provisions.</p>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">10. Contact Information</h3>
                <p>Questions about the Terms of Service should be sent to us at support@organization.org.</p>
            </div>
            
            <div class="mt-6 flex justify-end">
                <button id="acceptTerms" class="py-2 px-4 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
                    I Accept
                </button>
            </div>
        </div>
    </div>
    
    <!-- Privacy Policy Modal -->
    <div id="privacyModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white dark:bg-neutral-800 rounded-xl shadow-lg p-8 max-w-3xl w-full max-h-[80vh] overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-white">Privacy Policy</h2>
                <button id="closePrivacyModal" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            
            <div class="text-gray-700 dark:text-neutral-300 text-sm space-y-4">
                <p class="italic">Last updated: March 14, 2025</p>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">1. Introduction</h3>
                <p>This Privacy Policy describes how we collect, use, and disclose your personal information when you register as a member of our organization.</p>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">2. Information We Collect</h3>
                <p>We collect information you provide directly to us during registration, including:</p>
                <ul class="list-disc pl-5 mt-2 space-y-1">
                    <li>Student ID</li>
                    <li>University email address</li>
                    <li>First and last name</li>
                    <li>Program and year level</li>
                    <li>Proof of membership payment</li>
                    <li>Membership type</li>
                </ul>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">3. How We Use Your Information</h3>
                <p>We use the information we collect for various purposes, including:</p>
                <ul class="list-disc pl-5 mt-2 space-y-1">
                    <li>Processing your membership application</li>
                    <li>Communicating with you about organization activities and events</li>
                    <li>Maintaining our membership database</li>
                    <li>Providing member-only benefits and services</li>
                    <li>Analyzing membership demographics for organization planning</li>
                </ul>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">4. Information Sharing</h3>
                <p>We do not sell or rent your personal information to third parties. We may share your information with:</p>
                <ul class="list-disc pl-5 mt-2 space-y-1">
                    <li>Organization officers and administrators</li>
                    <li>University administration when required for official purposes</li>
                    <li>Third-party service providers that help us operate our organization</li>
                </ul>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">5. Data Security</h3>
                <p>We implement reasonable security measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction.</p>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">6. Your Rights</h3>
                <p>You have the right to:</p>
                <ul class="list-disc pl-5 mt-2 space-y-1">
                    <li>Access the personal information we hold about you</li>
                    <li>Request correction of inaccurate information</li>
                    <li>Request deletion of your information (subject to certain exceptions)</li>
                    <li>Opt-out of certain communications</li>
                </ul>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">7. Changes to This Privacy Policy</h3>
                <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>
                
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">8. Contact Us</h3>
                <p>If you have any questions about this Privacy Policy, please contact us at privacy@organization.org.</p>
            </div>
            
            <div class="mt-6 flex justify-end">
                <button id="acceptPrivacy" class="py-2 px-4 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
                    I Accept
                </button>
            </div>
        </div>
    </div>
    
    </section>
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Terms of Service Modal
            const termsModal = document.getElementById('termsModal');
            const closeTermsModal = document.getElementById('closeTermsModal');
            const acceptTerms = document.getElementById('acceptTerms');
            const termsLink = document.getElementById('termsLink'); // Use ID instead of querySelector
            
            // Privacy Policy Modal
            const privacyModal = document.getElementById('privacyModal');
            const closePrivacyModal = document.getElementById('closePrivacyModal');
            const acceptPrivacy = document.getElementById('acceptPrivacy');
            const privacyLink = document.getElementById('privacyLink'); // Use ID instead of querySelector
            
            // Terms of Service functions
            if (termsLink) {
                termsLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    console.log('Terms link clicked');
                    termsModal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
                });
            }
            
            if (closeTermsModal) {
                closeTermsModal.addEventListener('click', function() {
                    termsModal.classList.add('hidden');
                    document.body.style.overflow = ''; // Restore scrolling
                });
            }
            
            if (acceptTerms) {
                acceptTerms.addEventListener('click', function() {
                    termsModal.classList.add('hidden');
                    document.body.style.overflow = ''; // Restore scrolling
                    document.getElementById('accept_terms_and_conditions').checked = true;
                });
            }
            
            // Privacy Policy functions
            if (privacyLink) {
                privacyLink.addEventListener('click', function(e) {
                    e.preventDefault();
                    console.log('Privacy link clicked');
                    privacyModal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
                });
            }
            
            if (closePrivacyModal) {
                closePrivacyModal.addEventListener('click', function() {
                    privacyModal.classList.add('hidden');
                    document.body.style.overflow = ''; // Restore scrolling
                });
            }
            
            if (acceptPrivacy) {
                acceptPrivacy.addEventListener('click', function() {
                    privacyModal.classList.add('hidden');
                    document.body.style.overflow = ''; // Restore scrolling
                    document.getElementById('accept_terms_and_conditions').checked = true;
                });
            }
    
            window.addEventListener('click', function(e) {
                if (e.target === termsModal) {
                    termsModal.classList.add('hidden');
                    document.body.style.overflow = '';
                }
                if (e.target === privacyModal) {
                    privacyModal.classList.add('hidden');
                    document.body.style.overflow = '';
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const studentIdField = document.getElementById('student_id');
            const firstNameField = document.getElementById('first_name');
            const lastNameField = document.getElementById('last_name');
            const emailField = document.getElementById('umindanao_email');
            const submitButton = document.querySelector('button[type="submit"]');
            
            // Prevent negative values in student ID field
            studentIdField.addEventListener('input', function() {
                const idValue = parseInt(this.value);
                
                if (idValue < 0) {
                    let errorMsg = document.getElementById('student_id_error');
                    if (!errorMsg) {
                        errorMsg = document.createElement('p');
                        errorMsg.id = 'student_id_error';
                        errorMsg.className = 'mt-1 text-sm text-red-600';
                        errorMsg.textContent = 'Student ID cannot be negative';
                        this.parentNode.appendChild(errorMsg);
                    }
                    
                    this.classList.add('border-red-500');
                    
                    submitButton.disabled = true;
                } else {
                    const errorMsg = document.getElementById('student_id_error');
                    if (errorMsg) {
                        errorMsg.remove();
                    }
                    
                    this.classList.remove('border-red-500');
                    
                    submitButton.disabled = false;
                    
                    generateEmail();
                }
            });
            
            studentIdField.setAttribute('min', '0');
            
            firstNameField.addEventListener('input', generateEmail);
            lastNameField.addEventListener('input', generateEmail);
            
            // Format email function
            function generateEmail() {
                const firstName = firstNameField.value.trim();
                const lastName = lastNameField.value.trim();
                const studentId = studentIdField.value.trim();
                
                if (firstName && lastName && studentId && parseInt(studentId) >= 0) {
                    const firstInitial = firstName.charAt(0).toLowerCase();
                    
                    const formattedEmail = `${firstInitial}.${lastName.toLowerCase()}.${studentId}@umindanao.edu.ph`;
                    
                    emailField.value = formattedEmail;
                    
                    emailField.setAttribute('readonly', true);
                    emailField.classList.add('bg-gray-100', 'dark:bg-neutral-800');
                }
            }
            
            if (firstNameField.value && lastNameField.value && studentIdField.value) {
                generateEmail();
            }
        });
    </script>
    

