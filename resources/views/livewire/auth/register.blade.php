<div class="w-full h-full flex flex-col justify-center items-center pt-32">
    <div
        class="group grid rounded-md min-w-96 grid-cols-1 md:grid-cols-8 overflow-hidden border border-indigo-300 bg-neutral-50 text-neutral-600 dark:border-indigo-700 dark:bg-gray-900 dark:text-neutral-300">
        <!-- body -->
        <div class="flex flex-col justify-center p-6 col-span-8">
            <h1 class="text-4xl font-bold text-gray-900 leading-tight pb-4 relative text-center mb-4">
                <span
                    class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-500 to-purple-500">Sign up</span>
            </h1>
            <form wire:submit="register">
                @csrf
                <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300">
                    <label for="name" class="w-fit pl-0.5 text-sm">Name</label>
                    <input id="name" type="text" wire:model="name" required
                           class="w-full rounded-md border border-indigo-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400 disabled:cursor-not-allowed disabled:opacity-75 dark:border-indigo-700 dark:bg-neutral-900/50 dark:focus-visible:outline-indigo-800"
                           name="name" placeholder="Enter your name" autocomplete="name"/>
                    @error('name')
                    <span class="mt-2 text-red-700 dark:text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300 mt-4">
                    <label for="email" class="w-fit pl-0.5 text-sm">Email</label>
                    <input id="email" type="email" wire:model="email" required
                           class="w-full rounded-md border border-indigo-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400 disabled:cursor-not-allowed disabled:opacity-75 dark:border-indigo-700 dark:bg-neutral-900/50 dark:focus-visible:outline-indigo-800"
                           name="email" placeholder="Enter your email" autocomplete="email"/>
                    @error('email')
                    <span class="mt-2 text-red-700 dark:text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300 mt-4">
                    <label for="password" class="w-fit pl-0.5 text-sm">Password</label>
                    <div x-data="{ showPassword: false }" class="relative">
                        <input :type="showPassword ? 'text' : 'password'" id="password" wire:model="password" required
                               class="w-full rounded-md border border-indigo-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400 disabled:cursor-not-allowed disabled:opacity-75 dark:border-indigo-700 dark:bg-neutral-900/50 dark:focus-visible:outline-indigo-800"
                               name="password" autocomplete="current-password" placeholder="••••••••••••••"/>
                        <button type="button" @click="showPassword = !showPassword"
                                class="absolute right-2.5 top-1/2 -translate-y-1/2 text-neutral-600 dark:text-neutral-300"
                                aria-label="Show password">
                            <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>
                            <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88"/>
                            </svg>
                        </button>
                    </div>
                    @error('password')
                    <span class="mt-2 text-red-700 dark:text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300 mt-4">
                    <label for="password-confirmation" class="w-fit pl-0.5 text-sm">Confirm Password</label>
                    <div x-data="{ showConfirmPassword: false }" class="relative">
                        <input :type="showConfirmPassword ? 'text' : 'password'" id="password-confirmation"
                               wire:model="password_confirmation" required
                               class="w-full rounded-md border border-indigo-300 bg-neutral-50 px-2 py-2 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400 disabled:cursor-not-allowed disabled:opacity-75 dark:border-indigo-700 dark:bg-neutral-900/50 dark:focus-visible:outline-indigo-800"
                               name="password_confirmation" autocomplete="current-password_confirmation"
                               placeholder="••••••••••••••"/>
                        <button type="button" @click="showConfirmPassword = !showConfirmPassword"
                                class="absolute right-2.5 top-1/2 -translate-y-1/2 text-neutral-600 dark:text-neutral-300"
                                aria-label="Show password confirmation">
                            <svg x-show="!showConfirmPassword" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>
                            <svg x-show="showConfirmPassword" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88"/>
                            </svg>
                        </button>
                    </div>
                    @error('password_confirmation')
                    <span class="mt-2 text-red-700 dark:text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300 text-sm mt-4">
                    <span>Have an account? <a
                            class="text-indigo-600 dark:text-indigo-500 hover:text-indigo-700 dark:hover:text-indigo-400 transition"
                            href="{{ route('login') }}">Sign in</a></span>
                </div>

                <div class="flex w-full max-w-xs flex-col gap-1 text-neutral-600 dark:text-neutral-300 mt-4">
                    <button type="submit"
                            class="cursor-pointer whitespace-nowrap bg-transparent rounded-md border border-indigo-500 px-4 py-2 text-sm font-medium tracking-wide text-indigo-500 transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:border-indigo-500 dark:text-indigo-500 dark:focus-visible:outline-indigo-500">
                        Sign up
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
