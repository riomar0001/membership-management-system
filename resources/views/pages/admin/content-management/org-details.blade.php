<x-layouts.admin>
    <div class="px-4 py-5 sm:px-6 lg:px-5 lg:py-5 mx-auto">
        <div class="bg-white dark:bg-neutral-900 rounded-xl shadow-sm p-4 sm:p-7">
            <!-- Header -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-800">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                        Organization's Details
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                        Organization logo, mission, vision, and FAQs
                    </p>
                </div>

                <div>
                    @if ($logo && $mission && $vision && $faqs)
                        <a href="{{ route('org-details.edit') }}" 
                           class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-yellow-600 text-white hover:bg-yellow-700 focus:outline-hidden focus:bg-yellow-700 disabled:opacity-50 disabled:pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil">
                                <path d="M17 3a2.85 2.85 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/>
                                <path d="m15 5 4 4"/>
                            </svg>
                            Update Details
                        </a>
                    @endif
                </div>
            </div>
            <!-- End Header -->

            @if(session('success'))
                <div class="m-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                    {{ session('success') }}
                </div>
            @endif

            @if ($logo && $mission && $vision && $faqs)
                <div class="p-6">
                    <div class="grid gap-y-8">
                        <div class="bg-gray-50 dark:bg-neutral-800 rounded-lg p-4 sm:p-6">
                            <div class="flex items-center">
                                <h3 class="text-base font-semibold text-gray-800 dark:text-neutral-200">
                                    Logo
                                </h3>
                            </div>
                            <img src="{{ asset('storage/'.$logo) }}" alt="Logo" class="mt-2 h-20">
                        </div>

                        <div class="bg-gray-50 dark:bg-neutral-800 rounded-lg p-4 sm:p-6">
                            <div class="flex items-center">
                                <h3 class="text-base font-semibold text-gray-800 dark:text-neutral-200">
                                    Mission
                                </h3>
                            </div>
                            <p class="mt-2 text-gray-600 dark:text-neutral-400 break-all">
                                {{ $mission }}
                            </p>
                        </div>

                        <div class="bg-gray-50 dark:bg-neutral-800 rounded-lg p-4 sm:p-6">
                            <div class="flex items-center">
                                <h3 class="text-base font-semibold text-gray-800 dark:text-neutral-200">
                                    Vision
                                </h3>
                            </div>
                            <p class="mt-2 text-gray-600 dark:text-neutral-400 break-all">
                                {{ $vision }}
                            </p>
                        </div>
                        <div class="bg-gray-50 dark:bg-neutral-800 rounded-lg p-4 sm:p-6">
                            <div class="flex items-center">
                                <h3 class="text-base font-semibold text-gray-800 dark:text-neutral-200">
                                    FAQs
                                </h3>
                            </div>
                            <div class="mt-4 space-y-4">
                                @if(is_array($faqs) || is_object($faqs))
                                    @foreach($faqs as $faq)
                                        <div class="border-b border-gray-200 dark:border-neutral-700 pb-3 mb-3 last:border-0 last:pb-0 last:mb-0">
                                            <p class="font-medium text-gray-800 dark:text-neutral-200">{{ $faq->question ?? $faq['question'] }}</p>
                                            <p class="mt-1 text-gray-600 dark:text-neutral-400">{{ $faq->answer ?? $faq['answer'] }}</p>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="text-gray-600 dark:text-neutral-400">No FAQs available.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="p-6 flex flex-col items-center justify-center">
                    <div class="flex flex-col text-center justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#846c6c" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-collapse"><path d="m3 10 2.5-2.5L3 5"/><path d="m3 19 2.5-2.5L3 14"/><path d="M10 6h11"/><path d="M10 12h11"/><path d="M10 18h11"/></svg>  
                            
                             <h3 class="mt-2 text-lg font-medium text-gray-900 dark:text-neutral-200">No Organization information available</h3>
                            <p class="mt-1 text-sm text-gray-500 dark:text-neutral-400">
                                Please add organization details.
                            </p>
                        <div class="mt-6">
                            <a href="{{ route('org-details.show') }}" 
                               class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"/>
                                    <path d="M12 5v14"/>
                                </svg>
                                Add Organization Details
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-layouts.admin>