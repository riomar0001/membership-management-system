<x-layouts.auth>
    <section class="relative">
        <div class="absolute top-0 right-0 m-4">
            <button id="theme-toggle" class="rounded text-neutral-900 dark:text-white p-2">
                <!-- Default Light Mode Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-moon">
                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
                </svg>
            </button>
        </div>
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-[90vh] lg:py-0">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-neutral-800 dark:border-neutral-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="mb-10 text-xl font-bold leading-tight tracking-tight text-neutral-900 md:text-2xl dark:text-white text-center">
                        Sign in to Members Management System
                    </h1>

                    @error('umindanao_email')
                        <div class="flex items-center justify-center space-x-2 bg-red-400/60 rounded-lg">
                            <p class="dark:text-red-50 my-5">
                                {{ $message }}</p>
                        </div>
                    @enderror
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-neutral-900 dark:text-white">Your
                                email</label>
                            <input type="email" name="umindanao_email" placeholder="University Email" id="email"
                                class="bg-neutral-50 border border-neutral-300 text-neutral-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-neutral-700 dark:border-neutral-600 dark:placeholder-neutral-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-neutral-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-neutral-50 border border-neutral-300 text-neutral-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-neutral-700 dark:border-neutral-600 dark:placeholder-neutral-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox" name="remember"
                                        class="w-4 h-4 border border-neutral-300 rounded bg-neutral-50 focus:ring-3 focus:ring-blue-300 dark:bg-neutral-700 dark:border-neutral-600 dark:focus:ring-blue-600 dark:ring-offset-neutral-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-neutral-500 dark:text-neutral-300">Remember
                                        me</label>
                                </div>
                            </div>
                            <a href="#"
                                class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Forgot
                                password?</a>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign
                            in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-layouts.auth>
