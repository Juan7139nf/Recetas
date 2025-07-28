<nav x-data="{ mobileMenuIsOpen: false }" x-on:click.away="mobileMenuIsOpen = false"
    class="flex items-center justify-between gap-4 px-5 py-3 rounded-b-4xl absolute top-0 w-[100%]">

    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="">
        {!! str_replace([':title', ':img'], [__('site.title'), asset('assets/img/site/logo_100.webp')], site('logo.md')) !!}
    </a>
    <!-- Search -->
    <div class="relative flex mr-auto w-full max-w-60 flex-col gap-1 text-neutral-100 dark:text-neutral-600">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
            aria-hidden="true"
            class="absolute left-2 top-1/2 size-5 -translate-y-1/2 text-neutral-100/70 dark:text-neutral-600/70">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
        </svg>
        <input type="search" name="search" id="searchInput" placeholder="Buscar recetas" aria-label="search"
            class="w-full rounded-full border border-neutral-700 bg-neutral-900/50 py-2 pl-8 pr-1 text-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-300 dark:bg-neutral-50 dark:focus-visible:outline-white"
            autocomplete="off" />

        <div id="searchResults"
            class="absolute z-50 mt-1 w-full rounded-md bg-white shadow-lg dark:bg-neutral-800 hidden">
            <!-- Resultados se insertarán aquí -->
        </div>
    </div>
    <!-- Desktop Menu -->
    <ul class="hidden items-center gap-3 shrink-0 sm:flex">
        <li><a href="#"
                class="font-bold text-black underline-offset-2 hover:text-black focus:outline-hidden focus:underline dark:text-white dark:hover:text-white"
                aria-current="page">Recetas</a></li>
        <li><a href="#"
                class="font-medium text-neutral-600 underline-offset-2 hover:text-black focus:outline-hidden focus:underline dark:text-neutral-300 dark:hover:text-white">Categorias</a>
        </li>
        @auth
            <li><a href="{{ route('cart') }}"
                    class="font-medium text-neutral-600 underline-offset-2 hover:text-black focus:outline-hidden focus:underline dark:text-neutral-300 dark:hover:text-white">Carrito</a>
        </li @endauth>
        <li>
            <button onclick="toggleTheme()"
                class="font-medium text-neutral-600 underline-offset-2 hover:text-black focus:outline-hidden focus:underline dark:text-neutral-300 dark:hover:text-white p-1 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-brightness-high-fill size-5 light-icon {{ optional(Auth::user())->getSetting('theme') === 'light' ? '' : 'hidden' }}"
                    viewBox="0 0 16 16">
                    <path
                        d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-moon-stars-fill size-4 dark-icon {{ optional(Auth::user())->getSetting('theme') === 'dark' ? '' : 'hidden' }} m-1"
                    viewBox="0 0 16 16">
                    <path
                        d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                    <path
                        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                </svg>
            </button>
        </li>
        <!-- User Pic -->
        <li x-data="{ userDropDownIsOpen: false, openWithKeyboard: false }" x-on:keydown.esc.window="userDropDownIsOpen = false, openWithKeyboard = false"
            class="relative flex items-center">
            <button x-on:click="userDropDownIsOpen = ! userDropDownIsOpen" x-bind:aria-expanded="userDropDownIsOpen"
                x-on:keydown.space.prevent="openWithKeyboard = true"
                x-on:keydown.enter.prevent="openWithKeyboard = true" x-on:keydown.down.prevent="openWithKeyboard = true"
                class="rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black dark:focus-visible:outline-white"
                aria-controls="userMenu">
                @auth
                    <img src="{{ Auth::user()->avatar['url'] }}" alt="User Profile"
                        class="size-10 rounded-full object-cover" />
                @else
                    <svg width="24" height="24" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="size-10 rounded-full p-1 {{ site('bg-linear-to-tr') }}">

                        <path class="fill-black dark:fill-white"
                            d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
                        <path class="fill-black dark:fill-white"
                            d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1.5a.5.5 0 0 0 1 0V11a.5.5 0 0 0-.5-.5m0 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1" />
                    </svg>
                    <img src="" alt="" srcset="">
                @endauth
            </button>
            <!-- User Dropdown -->
            <ul x-cloak x-show="userDropDownIsOpen || openWithKeyboard" x-transition.opacity x-trap="openWithKeyboard"
                x-on:click.outside="userDropDownIsOpen = false, openWithKeyboard = false"
                x-on:keydown.down.prevent="$focus.wrap().next()" x-on:keydown.up.prevent="$focus.wrap().previous()"
                id="userMenu"
                class="absolute right-0 top-12 flex w-fit min-w-48 flex-col overflow-hidden rounded-sm border border-neutral-300 bg-neutral-50 py-1.5 dark:border-neutral-700 dark:bg-neutral-900">
                @auth
                    <li class="border-b border-neutral-300 dark:border-neutral-700">
                        <div class="flex flex-col px-4 py-2">
                            <span
                                class="text-sm font-medium text-neutral-900 dark:text-white">{{ Auth::user()->username }}</span>
                            <p class="text-xs text-neutral-600 dark:text-neutral-300">{{ Auth::user()->email }}</p>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="block bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-hidden dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-50/5 dark:hover:text-white dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white">Dashboard
                        </a>
                    </li>
                    <li><a href="#"
                            class="block bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-hidden dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-50/5 dark:hover:text-white dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white">Subscription</a>
                    </li>
                    <li><a href="#"
                            class="block bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-hidden dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-50/5 dark:hover:text-white dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" onclick="logout(event)"
                            class="block bg-neutral-50 px-4 py-2 text-sm font-semibold text-red-600 hover:bg-neutral-900/5 hover:text-red-700 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-hidden dark:bg-neutral-900 dark:text-red-600 dark:hover:bg-neutral-50/5 dark:hover:text-red-500 dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white">{{ __('Logout') }}
                        </a>
                    </li>
                @else
                    <li><a href="{{ route('auth.login') }}"
                            class="block bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-hidden dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-50/5 dark:hover:text-white dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('auth.register'))
                        <li><a href="{{ route('auth.register') }}"
                                class="block bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-hidden dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-50/5 dark:hover:text-white dark:focus-visible:bg-neutral-50/10 dark:focus-visible:text-white">{{ __('Register') }}</a>
                        </li>
                    @endif
                @endauth
            </ul>
        </li>
    </ul>
    <!-- Mobile Menu Button -->
    <button x-on:click="mobileMenuIsOpen = !mobileMenuIsOpen" x-bind:aria-expanded="mobileMenuIsOpen"
        x-bind:class="mobileMenuIsOpen ? 'fixed top-6 right-6 z-20' : null" type="button"
        class="flex text-neutral-600 dark:text-neutral-300 sm:hidden" aria-label="mobile menu"
        aria-controls="mobileMenu">
        <svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>
    <!-- Mobile Menu -->
    <ul x-cloak x-show="mobileMenuIsOpen"
        x-transition:enter="transition motion-reduce:transition-none ease-out duration-300"
        x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0"
        x-transition:leave="transition motion-reduce:transition-none ease-out duration-300"
        x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full"
        class="fixed max-h-svh overflow-y-auto inset-x-0 top-0 z-10 flex flex-col rounded-b-sm border-b border-neutral-300 bg-neutral-50 px-8 pb-6 pt-10 dark:border-neutral-700 dark:bg-neutral-900 sm:hidden">
        <li class="mb-4 border-none">
            <div class="flex items-center gap-2 py-2">
                <img src="https://penguinui.s3.amazonaws.com/component-assets/avatar-8.webp" alt="User Profile"
                    class="size-12 rounded-full object-cover" />
                <div>
                    <span class="font-medium text-neutral-900 dark:text-white">Alice Brown</span>
                    <p class="text-sm text-neutral-600 dark:text-neutral-300">alice.brown@gmail.com</p>
                </div>
            </div>
        </li>
        <li class="p-2"><a href="#"
                class="w-full text-lg font-bold text-black focus:underline dark:text-white"
                aria-current="page">Products</a></li>
        <li class="p-2"><a href="#"
                class="w-full text-lg font-medium text-neutral-600 focus:underline dark:text-neutral-300">Pricing</a>
        </li>
        <li class="p-2"><a href="#"
                class="w-full text-lg font-medium text-neutral-600 focus:underline dark:text-neutral-300">Blog</a>
        </li>
        <hr role="none" class="my-2 border-outline dark:border-neutral-700">
        <li class="p-2"><a href="#"
                class="w-full text-neutral-600 focus:underline dark:text-neutral-300">Dashboard</a>
        </li>
        <li class="p-2"><a href="#"
                class="w-full text-neutral-600 focus:underline dark:text-neutral-300">Subscription</a></li>
        <li class="p-2"><a href="#"
                class="w-full text-neutral-600 focus:underline dark:text-neutral-300">Settings</a>
        </li>
        <!-- CTA Button -->
        <li class="mt-4 w-full border-none">
            <a href="#" onclick="logout(event)"
                class="rounded-sm bg-black border border-black px-4 py-2 block text-center font-medium tracking-wide text-neutral-100 hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:border-white dark:text-black dark:focus-visible:outline-white">Sign
                Out</a>
        </li>
    </ul>
</nav>
<div x-data="{ show: false, screenHeight: 0 }" x-init="screenHeight = window.innerHeight / 8" x-on:scroll.window="show = window.pageYOffset >= screenHeight"
    class="fixed bottom-8 right-8">
    <button x-show="show" x-transition x-on:click="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="shadow-lg {{ site('bg-linear-to-b') }} p-2 rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
            <path class="fill-black dark:fill-white"
                d="m11 7.825l-4.9 4.9q-.3.3-.7.288t-.7-.313q-.275-.3-.288-.7t.288-.7l6.6-6.6q.15-.15.325-.212T12 4.425q.2 0 .375.063t.325.212l6.6 6.6q.275.275.275.688t-.275.712q-.3.3-.713.3t-.712-.3L13 7.825V19q0 .425-.288.713T12 20q-.425 0-.713-.288T11 19V7.825Z" />
        </svg>
    </button>
</div>

@auth
    <script>
        function toggleTheme() {
            $.ajax({
                url: "{{ route('settings.toggleTheme') }}",
                type: "POST",
                data: {
                    _method: 'POST',
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log('Tema cambiado a:', response);
                    if (response.theme) {
                        document.documentElement.setAttribute('data-theme', response.theme);

                        if (response.theme === 'dark') {
                            $('.light-icon').addClass('hidden');
                            $('.dark-icon').removeClass('hidden');
                        } else {
                            $('.dark-icon').addClass('hidden');
                            $('.light-icon').removeClass('hidden');
                        }
                    }
                },
                error: function() {
                    console.error('Error al cambiar tema');
                },
                complete: function() {
                    console.log('La petición ha terminado');
                }
            });
        }

        function logout(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('auth.logout') }}",
                type: "POST",
                data: {
                    _method: 'DELETE',
                    _token: '{{ csrf_token() }}'
                },
                success: function() {
                    location.reload();
                },
                error: function() {
                    console.error('Error al cerrar sesión');
                }
            });
        }
    </script>
@else
    <script>
        const savedTheme = localStorage.getItem('theme');
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const theme = savedTheme || (systemPrefersDark ? 'dark' : 'light');

        console.log('Tema aplicado:', theme);

        document.documentElement.setAttribute('data-theme', theme);

        if (theme === 'dark') {
            $('.light-icon').addClass('hidden');
            $('.dark-icon').removeClass('hidden');
        } else {
            $('.dark-icon').addClass('hidden');
            $('.light-icon').removeClass('hidden');
        }

        function toggleTheme() {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

            document.documentElement.setAttribute('data-theme', newTheme);

            if (newTheme === 'dark') {
                $('.light-icon').addClass('hidden');
                $('.dark-icon').removeClass('hidden');
            } else {
                $('.dark-icon').addClass('hidden');
                $('.light-icon').removeClass('hidden');
            }

            localStorage.setItem('theme', newTheme);
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#searchInput').on('input', function() {
                const query = $(this).val();

                if (query.length < 2) {
                    $('#searchResults').empty().addClass('hidden');
                    return;
                }

                $.ajax({
                    url: '{{ route('search') }}',
                    type: 'GET',
                    data: {
                        q: query
                    },
                    success: function(data) {
                        const $results = $('#searchResults');
                        $results.empty();

                        if (data.length === 0) {
                            $results.append(
                                '<div class="p-2 text-sm text-gray-500">Sin resultados</div>'
                            );
                        } else {
                            data.forEach(item => {
                                $results.append(`
                                <a href="${item.id}" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-neutral-700 border-b border-gray-100 dark:border-neutral-700">
                                    <div class="flex items-center gap-2">
                                        <img src="${item.cover['url']}" alt="${item.title}" class="w-10 h-10 object-cover rounded">
                                        <span>${item.title}</span>
                                    </div>
                                </a>
                            `);
                            });
                        }

                        $results.removeClass('hidden');
                    },
                    error: function() {
                        console.error('Error al buscar.');
                    }
                });
            });

            // Ocultar resultados si se hace clic fuera
            $(document).on('click', function(e) {
                if (!$(e.target).closest('#searchInput, #searchResults').length) {
                    $('#searchResults').addClass('hidden');
                }
            });
        });
    </script>
@endauth
