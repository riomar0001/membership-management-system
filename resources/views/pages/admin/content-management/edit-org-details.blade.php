<x-layouts.admin>
    <div class="px-4 py-5 sm:px-6 lg:px-5 lg:py-5 mx-auto bg-white dark:bg-neutral-900 rounded-xl shadow-xs">
        <a href="{{ route('org-details') }}"
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
                Edit Organization Details
            </h1>
            <p class="text-sm text-gray-800 dark:text-neutral-200">
                Update the organization's details below.
            </p>
        </div>

        <div class="max-w-3xl mx-auto p-4 sm:p-7">
            <form action="{{ route('org-details.update') }}" method="POST" enctype="multipart/form-data"
                id="orgDetailsForm">
                @csrf
                @method('POST')

                <div
                    class="grid sm:grid-cols-8 gap-2 sm:gap-2 first:pt-0 last:pb-0 border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                    <input type="hidden" name="id" value="{{ $id }}">

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="logo"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Logo
                            </label>
                            <div class="flex flex-col gap-3" x-data="{ viewLogoModal: false }">
                                <input id="logo" type="file" name="logo"
                                    class="block w-full border border-gray-200 shadow-sm  rounded-lg sm:text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                              file:bg-gray-50 file:border-0 file:me-4 file:py-2 file:px-4 dark:file:bg-neutral-700 dark:file:text-neutral-400">
                                @if ($logo)
                                    <div class="mb-2">
                                        <p class="text-sm text-gray-600 dark:text-neutral-400">Current file:
                                            <button type="button" x-on:click="viewLogoModal = true"
                                                class="text-blue-600 hover:underline">
                                                View current logo
                                            </button>
                                        </p>

                                        @include('pages.admin.content-management.view-org-logo-modal')
                                    </div>
                                @endif
                            </div>
                            @error('logo')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="mission"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Mission
                            </label>
                            <input id="mission" type="text" name="mission" value="{{ old('mission', $mission) }}"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            @error('mission')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="vision"
                                class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Vision
                            </label>
                            <input id="vision" type="text" name="vision" value="{{ old('vision', $vision) }}"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            @error('vision')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Frequently Asked Questions
                            </label>
                            <div id="faqs-container" class="space-y-4">
                                <!-- FAQ items will be generated here -->
                            </div>
                            <button type="button" id="add-faq-btn"
                                class="mt-2 py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus">
                                    <path d="M5 12h14" />
                                    <path d="M12 5v14" />
                                </svg>
                                Add Another FAQ
                            </button>
                            <input type="hidden" name="faqs" id="faqs-json">
                            @error('faqs')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <button type="submit"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-yellow-600 text-white hover:bg-yellow-700 focus:outline-hidden focus:bg-yellow-700 disabled:opacity-50 disabled:pointer-events-none">
                        Update Organization Details
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqsContainer = document.getElementById('faqs-container');
            const addFaqBtn = document.getElementById('add-faq-btn');
            const faqsJsonInput = document.getElementById('faqs-json');
            const form = document.getElementById('orgDetailsForm');

            // Parse existing FAQs
            let existingFaqs = [];
            try {
                existingFaqs = JSON.parse('{!! addslashes($faqs) !!}') || [];
            } catch (e) {
                existingFaqs = [];
                console.error('Error parsing FAQs:', e);
            }

            // Load existing FAQs
            if (existingFaqs.length === 0) {
                // Add an empty FAQ if none exist
                addFaqItem('', '');
            } else {
                // Add existing FAQs
                existingFaqs.forEach(faq => {
                    addFaqItem(faq.question, faq.answer);
                });
            }

            // Show/hide remove buttons based on FAQ count
            updateRemoveButtons();

            // Add new FAQ
            addFaqBtn.addEventListener('click', function() {
                addFaqItem('', '');
                updateRemoveButtons();
            });

            // Function to add FAQ item
            function addFaqItem(question, answer) {
                const newFaq = document.createElement('div');
                newFaq.className = 'faq-item p-4 border border-gray-200 dark:border-neutral-700 rounded-lg';
                newFaq.innerHTML = `
                    <div class="flex flex-col gap-y-2">
                        <label class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-300">
                            Question
                        </label>
                        <input type="text" name="faq_questions[]" value="${question}" class="py-1.5 sm:py-2 px-3 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100">
                    </div>
                    <div class="flex flex-col gap-y-2 mt-2">
                        <label class="inline-block text-sm font-medium text-gray-800 dark:text-neutral-300">
                            Answer
                        </label>
                        <textarea name="faq_answers[]" rows="2" class="py-1.5 sm:py-2 px-3 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100">${answer}</textarea>
                    </div>
                    <button type="button" class="remove-faq mt-2 text-red-500 text-sm">
                        Remove this FAQ
                    </button>
                `;
                faqsContainer.appendChild(newFaq);

                // Add event listener to the new remove button
                addRemoveEventListener(newFaq.querySelector('.remove-faq'));
            }

            // Function to add remove event listener
            function addRemoveEventListener(removeBtn) {
                removeBtn.addEventListener('click', function() {
                    this.closest('.faq-item').remove();
                    updateRemoveButtons();
                });
            }

            // Update remove buttons visibility
            function updateRemoveButtons() {
                const faqItems = faqsContainer.querySelectorAll('.faq-item');
                const removeButtons = faqsContainer.querySelectorAll('.remove-faq');

                if (faqItems.length === 1) {
                    removeButtons[0].classList.add('hidden');
                } else {
                    removeButtons.forEach(btn => btn.classList.remove('hidden'));
                }
            }

            // Form submit handler to convert form data to JSON
            form.addEventListener('submit', function(e) {
                const questions = Array.from(document.querySelectorAll('input[name="faq_questions[]"]'))
                    .map(input => input.value);
                const answers = Array.from(document.querySelectorAll('textarea[name="faq_answers[]"]')).map(
                    textarea => textarea.value);

                const faqs = [];
                for (let i = 0; i < questions.length; i++) {
                    if (questions[i].trim() && answers[i].trim()) {
                        faqs.push({
                            question: questions[i],
                            answer: answers[i]
                        });
                    }
                }

                faqsJsonInput.value = JSON.stringify(faqs);
            });
        });
    </script>
</x-layouts.admin>
