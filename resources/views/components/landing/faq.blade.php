<section id="team" class="team section light-background">
    <div class="container section-title" data-aos="fade-up">
        <h2>FAQs</h2>
        <p>Frequently Asked Questions</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div
            class="w-full divide-y divide-neutral-300 overflow-hidden rounded-sm border border-neutral-300 bg-white text-neutral-600 dark:divide-neutral-700 dark:border-neutral-700 dark:bg-neutral-900/50 dark:text-neutral-300">

            @if (isset($data->faqs) && is_array($data->faqs))
                @foreach ($data->faqs as $index => $faq)
                    <div x-data="{ isExpanded: false }">
                        <button id="controlsAccordionItem{{ $index }}" type="button"
                            class="flex w-full items-center justify-between gap-4 bg-neutral-50 p-4 text-left underline-offset-2 hover:bg-neutral-50/75 focus-visible:bg-neutral-50/75 focus-visible:underline focus-visible:outline-hidden dark:bg-neutral-900 dark:hover:bg-neutral-900/75 dark:focus-visible:bg-neutral-900/75"
                            aria-controls="accordionItem{{ $index }}" x-on:click="isExpanded = ! isExpanded"
                            x-bind:class="isExpanded ? 'text-onSurfaceStrong dark:text-onSurfaceDarkStrong font-bold' :
                                'text-onSurface dark:text-onSurfaceDark font-medium'"
                            x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
                            {{ $faq->question }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                x-bind:class="isExpanded ? 'rotate-180' : ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div x-cloak x-show="isExpanded" id="accordionItem{{ $index }}" role="region"
                            aria-labelledby="controlsAccordionItem{{ $index }}" x-collapse>
                            <div class="p-4 text-sm sm:text-base text-pretty">
                                {{ $faq->answer }}
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="p-4 text-sm sm:text-base text-pretty">
                    No FAQs available at this time.
                </div>
            @endif

        </div>
    </div>
</section><!-- /Team Section -->
