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
            <form action="{{ route('org-details.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                
                <div class="grid sm:grid-cols-8 gap-2 sm:gap-2 first:pt-0 last:pb-0 border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                    <input type="hidden" name="id" value="{{ $id }}">
                    
                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="logo" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Logo
                            </label>
                            <div class="flex items-center gap-x-4">
                                <input id="logo" type="file" name="logo" class="justify-start py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                @if ($logo)
                                    <img src="{{ Storage::url($logo) }}" alt="Logo" class="h-20 object-contain">
                                @endif
                            </div>
                            @error('logo')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-8">
                        <div class="flex flex-col gap-y-2">
                            <label for="mission" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
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
                            <label for="vision" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
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
                            <label for="faqs" class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-300">
                                Frequently Asked Questions (JSON)
                            </label>
                            <textarea id="faqs" name="faqs" rows="3"
                                class="py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-100 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">{{ old('faqs', $faqs) }}</textarea>
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
</x-layouts.admin>