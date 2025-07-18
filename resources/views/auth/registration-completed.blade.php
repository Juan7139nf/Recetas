<div>

    <div
        class="flex items-center justify-center border-b border-neutral-300 bg-neutral-400/30 py-4 px-4 sm:px-15 dark:border-neutral-700 dark:bg-neutral-700/30 rounded-t-3xl">
        <div class="rounded-full bg-teal-500 border-3 border-teal-500">
            <svg class="w-12 h-12 p-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path class="fill-white"
                    d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z">
                </path>
            </svg>
        </div>
        <div class="h-1 w-[100%] bg-teal-500"></div>
        <div class="rounded-full bg-teal-500 border-3 border-teal-500">
            <svg class="w-12 h-12 p-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path class="fill-white"
                    d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                </path>
            </svg>
        </div>
        <div class="h-1 w-[100%] bg-teal-500"></div>
        <div class="rounded-full {{ site('bg-linear-to-t') }} border-3 border-neutral-900 dark:border-white">
            <svg class="w-12 h-12 p-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path class="fill-neutral-900 dark:fill-white"
                    d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z">
                </path>
            </svg>
        </div>
    </div>
    <div class="p-4 bg-neutral-300/30 dark:bg-neutral-600/30">
        @auth
            <p>Bienvenido, {{ Auth::user()->username }}</p>
        @endauth
        <button type="submit"
            class="whitespace-nowrap rounded-r-full w-40 h-10 px-5 text-md font-extrabold text-white cursor-pointer opacity-90 hover:opacity-95 focus:opacity-100 {{ site('bg-linear-to-t') }}">
            <span class="mr-2">{{__('Register')}}</span>
        </button>
    </div>

</div>