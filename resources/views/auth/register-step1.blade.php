<form wire:submit.prevent="register" autocomplete="off">
    <div
        class="flex items-center justify-center border-b border-neutral-300 bg-neutral-400/30 py-4 px-4 sm:px-15 dark:border-neutral-700 dark:bg-neutral-700/30 rounded-t-3xl">
        <div class="rounded-full {{ site('bg-linear-to-t') }} border-3 border-neutral-900 dark:border-white">
            <svg class="w-12 h-12 p-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path class="fill-neutral-900 dark:fill-white"
                    d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z">
                </path>
            </svg>
        </div>
        <div class="h-1 w-[100%] bg-neutral-900 dark:bg-white"></div>
        <div class="rounded-full bg-neutral-500/50 border-3 border-neutral-900 dark:border-white">
            <svg class="w-12 h-12 p-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path class="fill-neutral-900 dark:fill-white"
                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                </path>
            </svg>
        </div>
        <div class="h-1 w-[100%] bg-neutral-900 dark:bg-white"></div>
        <div class="rounded-full bg-neutral-500/50 border-3 border-neutral-900 dark:border-white">
            <svg class="w-12 h-12 p-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path class="fill-neutral-900 dark:fill-white"
                    d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z">
                </path>
            </svg>
        </div>
    </div>
    <div class="p-4 bg-neutral-300/30 dark:bg-neutral-600/30">
        <!-- Usuario -->
        <div class="relative my-6">
            <input id="username" type="text" wire:model.defer="username" placeholder="Usuario"
                class="peer w-full h-10 px-4 text-sm placeholder-transparent transition-all border-b outline-none border-slate-300 dark:border-slate-600 text-slate-800 dark:text-slate-200 focus:border-orange-400 invalid:border-red-500 focus:outline-none" />
            <label for="username"
                class="absolute left-2 -top-2 z-[1] px-2 text-xs text-slate-400 dark:text-slate-500 transition-all cursor-text peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-sm peer-focus:-top-2 peer-focus:text-xs peer-focus:text-orange-400">
                {{ __('auth.attributes.username') }} *
            </label>
            @error('username')
                <small class="text-red-500 text-xs mt-1 block">{{ $message }}</small>
            @enderror
        </div>

        <!-- Correo electrónico -->
        <div class="relative my-6">
            <input id="email" type="email" wire:model.defer="email" placeholder="Correo electrónico"
                class="peer w-full h-10 px-4 text-sm placeholder-transparent transition-all border-b outline-none border-slate-300 dark:border-slate-600 text-slate-800 dark:text-slate-200 focus:border-orange-400 invalid:border-red-500 focus:outline-none"
                autocomplete="new-email" />
            <label for="email"
                class="absolute left-2 -top-2 z-[1] px-2 text-xs text-slate-400 dark:text-slate-500 transition-all cursor-text peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-sm peer-focus:-top-2 peer-focus:text-xs peer-focus:text-orange-400">
                {{ __('auth.attributes.email') }} *
            </label>
            @error('email')
                <small class="text-red-500 text-xs mt-1 block">{{ $message }}</small>
            @enderror
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-6">
            <!-- Contraseña -->
            <div class="relative mb-6">
                <input id="password" type="password" wire:model.defer="password" placeholder="Contraseña"
                    class="peer w-full h-10 px-4 text-sm placeholder-transparent transition-all border-b outline-none border-slate-300 dark:border-slate-600 text-slate-800 dark:text-slate-200 focus:border-orange-400 invalid:border-red-500 focus:outline-none" />
                <label for="password"
                    class="absolute left-2 -top-2 z-[1] px-2 text-xs text-slate-400 dark:text-slate-500 transition-all cursor-text peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-sm peer-focus:-top-2 peer-focus:text-xs peer-focus:text-orange-400">
                    {{ __('auth.attributes.password') }} *
                </label>

                <button type="button" onclick="togglePassword('password', this)"
                    class="absolute top-2.5 right-4 h-5 w-5 cursor-pointer text-slate-400 focus:outline-none">
                    <!-- Ojo cerrado -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="1.5" class="w-5 h-5 eye-icon eye-closed">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                    </svg>
                    <!-- Ojo abierto -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="1.5" class="w-5 h-5 eye-icon eye-open hidden">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                    </svg>
                </button>

                @error('password')
                    <small class="text-red-500 text-xs mt-1 block">{{ $message }}</small>
                @enderror
            </div>

            <!-- Confirmar contraseña -->
            <div class="relative mb-6">
                <input id="password_confirmation" type="password" wire:model.defer="password_confirmation"
                    placeholder="Confirmar contraseña"
                    class="peer w-full h-10 px-4 text-sm placeholder-transparent transition-all border-b outline-none border-slate-300 dark:border-slate-600 text-slate-800 dark:text-slate-200 focus:border-orange-400 invalid:border-red-500 focus:outline-none" />
                <label for="password_confirmation"
                    class="absolute left-2 -top-2 z-[1] px-2 text-xs text-slate-400 dark:text-slate-500 transition-all cursor-text peer-placeholder-shown:top-2.5 peer-placeholder-shown:text-sm peer-focus:-top-2 peer-focus:text-xs peer-focus:text-orange-400">
                    {{ __('auth.attributes.password_confirmation') }} *
                </label>

                <button type="button" onclick="togglePassword('password_confirmation', this)"
                    class="absolute top-2.5 right-4 h-5 w-5 cursor-pointer text-slate-400 focus:outline-none">
                    <!-- Ojo cerrado -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="1.5" class="w-5 h-5 eye-icon eye-closed">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                    </svg>
                    <!-- Ojo abierto -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="1.5" class="w-5 h-5 eye-icon eye-open hidden">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                    </svg>
                </button>

                @error('password_confirmation')
                    <small class="text-red-500 text-xs mt-1 block">{{ $message }}</small>
                @enderror
            </div>

            <!-- Script JS -->
            <script>
                function togglePassword(id, button) {
                    const input = document.getElementById(id);
                    const eyes = button.querySelectorAll('.eye-icon');
                    if (input.type === 'password') {
                        input.type = 'text';
                        eyes.forEach(e => e.classList.toggle('hidden'));
                    } else {
                        input.type = 'password';
                        eyes.forEach(e => e.classList.toggle('hidden'));
                    }
                }
            </script>

        </div>
    </div>

    <div
        class="flex justify-between gap-2 border-t border-neutral-300 bg-neutral-400/30 p-4 dark:border-neutral-700 dark:bg-neutral-700/30 sm:flex-row items-center md:justify-end rounded-b-3xl">
        <a href="{{ route('home') }}"
            class="inline-flex items-center justify-center w-40 h-10 gap-2 px-5 text-md font-extrabold tracking-wide transition duration-300 rounded-l-full focus-visible:outline-none justify-self-center whitespace-nowrap bg-neutral-500/30 text-neutral-200 hover:bg-neutral-500/40 hover:text-neutral-100 focus:bg-neutral-500/50 focus:text-neutral-50 disabled:cursor-not-allowed disabled:border-neutral-300 disabled:bg-neutral-100 disabled:text-neutral-400 disabled:shadow-none opacity-90 hover:opacity-95 focus:opacity-100">
            <span class="ml-2">{{__('site.home')}}</span>
        </a>
        <button type="submit" wire:loading.attr="disabled" wire:target="register"
            class="whitespace-nowrap rounded-r-full w-40 h-10 px-5 text-md font-extrabold text-white cursor-pointer opacity-90 hover:opacity-95 focus:opacity-100 {{ site('bg-linear-to-t') }}">
            <span class="mr-2">{{__('Register')}}
                <svg wire:loading wire:target="register" class="inline w-4 h-4 animate-spin text-white" fill="none"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                </svg></span>
        </button>
    </div>
</form>