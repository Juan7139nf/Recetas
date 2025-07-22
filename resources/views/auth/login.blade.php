<form wire:submit.prevent="authenticate" class="w-[100%] sm:w-120 min-h-screen mx-auto space-y-6 p-8 bg-white/80 shadow-lg rounded-lg"
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
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus illo reiciendis amet quos voluptatem id voluptatum eum magni minus repellendus soluta sed ex animi voluptate tenetur, quasi ut accusamus ipsam illum ad odio? Ratione quia id sequi omnis obcaecati illo modi aperiam voluptatem facere debitis architecto, tempore dignissimos, amet doloremque nulla beatae quas mollitia! Iste dolores, dolorem harum modi similique doloribus quae ipsam atque ipsum, aliquid alias totam esse. Asperiores accusantium tenetur incidunt eligendi iure. Dolorem ab aut nisi officiis fugiat, dolores labore quo placeat amet, modi soluta itaque iste hic, aliquid molestias doloremque harum culpa! Ipsam ratione minus expedita aperiam sit. Similique quis molestiae nam fugiat, libero cum nesciunt vitae magni suscipit. Repudiandae eligendi a culpa doloribus esse minima veritatis quisquam numquam voluptate soluta quasi debitis, necessitatibus rem ad ut pariatur aliquam autem officia dolore placeat corrupti aut voluptatem! Ea nihil facere voluptatibus id? Fugiat nobis ducimus ipsum unde nisi voluptatibus vero quasi voluptate possimus nulla temporibus architecto voluptas ea vitae quae hic magni nemo, cum consequatur. Autem fugiat sapiente aliquam doloremque voluptatum rem molestiae voluptate maxime mollitia similique minima nam voluptates eveniet incidunt, nobis vitae alias veritatis, sunt maiores dolores pariatur debitis ipsum ullam? Sit culpa accusamus provident iure, commodi nobis non quibusdam aspernatur voluptatibus dolores iste consequuntur ipsum ab iusto deleniti pariatur accusantium tempora corrupti error, quos laborum mollitia odit aliquam! Officia labore rerum explicabo aliquid nemo, ullam omnis consequuntur assumenda doloremque accusamus distinctio laboriosam possimus, vitae sit quis eum nihil at est. Sit expedita, consectetur soluta nostrum laborum ab numquam aut impedit beatae magnam cupiditate eos neque suscipit fugit necessitatibus voluptatem assumenda! Exercitationem ratione, animi eum, reprehenderit, autem amet odit quibusdam mollitia sit dignissimos cumque eligendi sapiente dolor maiores a. Ex dolor in aut at voluptas! Vero quaerat tempora aperiam dolor vel. Omnis, nulla officiis est nobis voluptate quia explicabo corrupti fugit adipisci. Aliquid consequatur maxime repudiandae rerum expedita aut fuga aliquam accusantium, dolorum atque, nemo quasi adipisci veniam odio dolorem eum. Perspiciatis facilis in molestias dolores soluta aut alias amet cumque praesentium aperiam id enim impedit, doloribus numquam illum fugit et laudantium delectus repellendus similique reiciendis corrupti! Eaque quo pariatur temporibus vero ratione quod rem at reiciendis ducimus aut, nemo adipisci harum dicta provident. Corrupti, perspiciatis inventore? Veniam delectus, deleniti consectetur repellendus, numquam nesciunt autem enim architecto dolorum quaerat exercitationem animi nulla impedit blanditiis cum dolores illum voluptas. Aliquam, ullam magni! Consequuntur dolorum veniam vero.
</form>