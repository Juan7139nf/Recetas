<form wire:submit.prevent="authenticate"
    class="w-[100%] sm:w-150 min-h-screen mx-auto sm:mx-0 py-15 space-y-10 p-8 lg:px-25 bg-white/80 dark:bg-black/50 shadow-lg absolute right-0"
    x-data="{ showPassword: false }">

    {!! str_replace(':title', __('Login'), site('titulos')) !!}

    {{-- Usuario o Email --}}
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-100 mb-1">Usuario o
            Email</label>
        <div class="relative">
            <span class="absolute left-3 top-2.5 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 640 640">
                    <path class="fill-gray-400"
                        d="M320 312C386.3 312 440 258.3 440 192C440 125.7 386.3 72 320 72C253.7 72 200 125.7 200 192C200 258.3 253.7 312 320 312zM290.3 368C191.8 368 112 447.8 112 546.3C112 562.7 125.3 576 141.7 576L498.3 576C514.7 576 528 562.7 528 546.3C528 447.8 448.2 368 349.7 368L290.3 368z" />
                </svg>
            </span>
            <input type="text" id="name" wire:model.defer="name"
                class="pl-10 pr-3 py-2 block w-full border border-gray-300 dark:border-gray-800 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400 dark:text-white"
                placeholder="Ingresa tu usuario o email" />
        </div>
        @error('name')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Contraseña --}}
    <div>
        <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-100 mb-1">Contraseña</label>
        <div class="relative">
            <input :type="showPassword ? 'text' : 'password'" id="password" wire:model.defer="password"
                class="pl-3 pr-10 py-2 block w-full border border-gray-300 dark:border-gray-800 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400 dark:text-white"
                placeholder="********" />
            <button type="button" @click="showPassword = !showPassword"
                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 focus:outline-none"
                tabindex="-1" aria-label="Mostrar u ocultar contraseña">
                <!-- Icono ojo cerrado -->
                <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="1.5" class="w-5 h-5 eye-icon eye-closed">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                </svg>
                <!-- Icono ojo abierto -->
                <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5
                           c4.478 0 8.268 2.943 9.542 7
                           -1.274 4.057-5.064 7-9.542 7
                           -4.477 0-8.268-2.943-9.542-7z" />
                </svg>
            </button>
        </div>
        @error('password')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Recordarme --}}
    <div class="flex items-center justify-between">
        <label class="inline-flex items-center text-sm text-gray-700 dark:text-gray-100">
            <input type="checkbox" wire:model="remember" class="h-4 w-4 accent-emerald-500 border-gray-300 rounded" />
            <span class="ml-2">Recordarme</span>
        </label>
        <a href="#" class="text-sm text-emerald-400 hover:underline">¿Olvidaste tu contraseña?</a>
    </div>

    {{-- Botón de Envío --}}
    <div>
        <button type="submit" class="w-full {{ site('btn.primary') }}">
            <span wire:target="authenticate">{{ __('Login') }}</span>
            <svg wire:loading wire:target="authenticate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                aria-hidden="true" class="size-5 motion-safe:animate-spin fill-white ml-1">
                <path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"
                    opacity=".25" />
                <path
                    d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z" />
            </svg>
        </button>
    </div>

    @if ($error)
        <div x-data="{ alertIsVisible: @entangle('error') }" x-show="alertIsVisible"
            class="relative w-full overflow-hidden rounded-lg border border-red-500 bg-white text-neutral-600 dark:bg-neutral-950 dark:text-neutral-300"
            role="alert" x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
            <div class="flex w-full items-center gap-2 bg-red-500/20 dark:bg-red-500/10 p-4">
                <div class="bg-red-500/15 text-red-500 rounded-full p-1" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-2">
                    <h3 class="text-sm font-semibold text-red-500">{{ __('auth.failed') }}</h3>
                    <!--<p class="text-xs font-medium sm:text-sm">{{ __('auth.failed_detail') }}</p>-->
                </div>
                <button type="button" @click="alertIsVisible = false" class="ml-auto mb-auto"
                    aria-label="dismiss alert">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor"
                        fill="none" stroke-width="2.5" class="w-4 h-4 shrink-0">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
</form>
