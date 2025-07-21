<form wire:submit.prevent="authenticate" class="max-w-md mx-auto mt-12 space-y-6 p-8 bg-white shadow-lg rounded-lg"
    x-data="{ showPassword: false }">

    <h2 class="text-2xl font-bold text-center text-gray-800">Iniciar Sesión</h2>

    {{-- Usuario o Email --}}
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Usuario o Email</label>
        <div class="relative">
            <span class="absolute left-3 top-2.5 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A11.955 11.955 0 0112 15c2.45 0 4.713.744 6.879 2.016M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </span>
            <input type="text" id="name" wire:model.defer="name"
                class="pl-10 pr-3 py-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400"
                placeholder="Ingresa tu usuario o email" />
        </div>
        @error('name')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Contraseña --}}
    <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
        <div class="relative">
            <input :type="showPassword ? 'text' : 'password'" id="password" wire:model.defer="password"
                class="pl-3 pr-10 py-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400"
                placeholder="********" />
            <button type="button" @click="showPassword = !showPassword"
                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 focus:outline-none" tabindex="-1"
                aria-label="Mostrar u ocultar contraseña">
                <!-- Icono ojo cerrado -->
                <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5
                           c4.478 0 8.268 2.943 9.542 7
                           -1.274 4.057-5.064 7-9.542 7
                           -4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                <!-- Icono ojo abierto -->
                <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19
                           c-4.478 0-8.268-2.943-9.542-7
                           a10.04 10.04 0 013.057-4.472M15 12
                           a3 3 0 00-3-3m0 0a3 3 0 00-3 3
                           m6 0a3 3 0 01-3 3m-3 0a3 3 0 013-3
                           m0-3l7 7m-14 0l7-7" />
                </svg>
            </button>
        </div>
        @error('password')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Recordarme --}}
    <div class="flex items-center justify-between">
        <label class="inline-flex items-center text-sm text-gray-700">
            <input type="checkbox" wire:model="remember" class="h-4 w-4 text-blue-600 border-gray-300 rounded" />
            <span class="ml-2">Recordarme</span>
        </label>
        <a href="#" class="text-sm text-blue-600 hover:underline">¿Olvidaste tu contraseña?</a>
    </div>

    {{-- Botón de Envío --}}
    <div>
        <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md font-semibold transition duration-200 ease-in-out flex justify-center items-center">
            <svg wire:loading wire:target="authenticate" class="animate-spin h-5 w-5 mr-2 text-white"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
            </svg>
            <span wire:loading.remove wire:target="authenticate">Iniciar Sesión</span>
        </button>
    </div>

    @error('error')
        <p class="text-red-600 text-sm text-center mt-4">{{ $message }}</p>
    @enderror

</form>