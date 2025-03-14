<div x-cloak x-show="termsAndConditionModal" x-transition.opacity.duration.200ms
    x-trap.inert.noscroll="termsAndConditionModal" x-on:keydown.esc.window="termsAndConditionModal = false"
    x-on:click.self="termsAndConditionModal = false"
    class="fixed inset-0 z-50 flex justify-center bg-black/80 p-4 pb-8 items-center lg:p-8" role="dialog"
    aria-modal="true" aria-labelledby="defaultModalTitle" style="display: none !important;">
    <!-- Modal Dialog -->
    <div x-show="termsAndConditionModal"
        x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
        x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100"
        class="flex max-h-[80vh] w-[80vh] flex-col gap-4 p-10 overflow-hidden rounded-xl border border-neutral-300 bg-white text-neutral-600 dark:border-neutral-800 dark:bg-neutral-950 dark:text-neutral-500">
        <div class="flex flex-col justify-start text-start overflow-y-auto text-gray-600 dark:text-neutral-100 ">

            <div class="flex flex-col gap-5">
                <div>
                    <h2 class="text-xl font-bold">Terms and Condition and Privary Policy</h2>
                    <p class="text-xs text-gray-600 dark:text-neutral-400">
                        Association of Computer Science Students of the University of Mindanao (ACSSUM) - Terms and
                        Conditions and Privacy Policy
                    </p>
                </div>

                <p class="text-sm text-justify">
                    By registering with the Association of Computer Science Students of the University of Mindanao
                    (ACSSUM), you agree to provide accurate information for membership management and communication.
                    Participation in ACSSUM activities and adherence to community guidelines are required, with
                    violations subject to appropriate actions, including termination of membership.

                </p>

                <p class="text-sm text-justify">
                    Your personal data will be collected, stored, and used for purposes related to ACSSUM operations,
                    including membership management, event coordination, and communication. All data will be handled in
                    compliance with the Data Privacy Act of 2012 (Republic Act No. 10173), ensuring that it is used
                    solely for organizational purposes. We take all necessary measures to secure your data from
                    unauthorized access, misuse, or disclosure.
                </p>

                <p class="text-sm text-justify">
                    We will not share your personal information with third parties without your consent, except where
                    required by law. You retain the right to request access, correction, or deletion of your data at any
                    time, in accordance with Republic Act No. 10173.
                </p>

                <p class="text-sm text-justify">
                    ACSSUM reserves the right to amend these terms and policies at any time, with notice provided via
                    email or on our website. Your continued participation signifies acceptance of these terms and any
                    future updates.
                </p>

                <p class="text-sm text-justify">
                    By continuing to use our services, you acknowledge and accept these terms and agree to adhere to the
                    guidelines and policies set forth by ACSSUM.
                </p>

                <button type="button" x-on:click="termsAndConditionModal = false"
                    class=" py-2 justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Close
                </button>

            </div>
        </div>

    </div>
</div>
