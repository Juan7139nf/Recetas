<div class="absolute top-25 w-full">
    <!-- Hero Section con Carrusel -->
    <section class="relative w-full mb-16">
        <div class="splide mi-carousel-interval-autoplay">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($carrousel as $item)
                        <li class="splide__slide">
                            <div
                                class="relative h-[400px] md:h-[500px] lg:h-[600px] overflow-hidden rounded-2xl shadow-2xl">
                                <!-- Imagen de fondo -->
                                <img src="{{ $item->cover_url }}"
                                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                                    alt="{{ $item->title }}" />

                                <!-- Overlay gradient -->
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent">
                                </div>

                                <!-- Contenido -->
                                <div class="absolute bottom-0 left-0 right-0 p-8 md:p-12 text-white">
                                    <div class="max-w-4xl">
                                        <span
                                            class="inline-block px-3 py-1 mb-4 text-sm font-medium bg-white/20 backdrop-blur-sm rounded-full">
                                            {{ $item->license }}
                                        </span>
                                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 leading-tight">
                                            {{ $item->title }}
                                        </h1>
                                        <p class="text-lg md:text-xl mb-6 text-white/90 max-w-2xl">
                                            Descubre esta increíble receta y aprende a cocinar como un profesional.
                                        </p>
                                        <a href="{{ route('recipe.read', $item->id) }}"
                                            class="inline-flex items-center gap-2 px-6 py-3 bg-white text-black font-semibold rounded-full hover:bg-white/90 transition-all duration-300 transform hover:scale-105 shadow-lg">
                                            Leer receta
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                stroke="currentColor" fill="none" stroke-width="2.5"
                                                class="w-5 h-5 transition-transform group-hover:translate-x-1">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <!-- Sección de Recetas -->
    <section class="w-full">
        <!-- Header de la sección -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 dark:text-white mb-4">
                Recetas Destacadas
            </h2>
            <p class="text-lg text-neutral-600 dark:text-neutral-400 max-w-2xl mx-auto">
                Explora nuestra colección de recetas cuidadosamente seleccionadas para inspirar tu próxima creación
                culinaria.
            </p>
        </div>

        <!-- Grid de recetas -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-4">
            @foreach ($recetas as $item)
                <article
                    class="group bg-white dark:bg-neutral-900 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-neutral-200 dark:border-neutral-700 hover:border-neutral-300 dark:hover:border-neutral-600">
                    <!-- Imagen -->
                    <div class="relative h-56 md:h-64 overflow-hidden">
                        <img src="{{ $item->cover_url }}"
                            class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110"
                            alt="{{ $item->title }}" />

                        <!-- Badge de precio -->
                        <div class="absolute top-4 right-4">
                            <span
                                class="inline-flex items-center px-3 py-1 bg-white/90 backdrop-blur-sm text-neutral-900 font-semibold rounded-full shadow-lg">
                                {{ $item->price }} Bs
                            </span>
                        </div>
                    </div>

                    <!-- Contenido -->
                    <div class="p-6">
                        <!-- Título -->
                        <h3
                            class="text-xl font-bold text-neutral-900 dark:text-white mb-3 line-clamp-2 group-hover:text-yellow-600 dark:group-hover:text-yellow-400 transition-colors duration-300">
                            {{ $item->title }}
                        </h3>

                        <!-- Rating -->
                        <div class="flex items-center gap-1 mb-4">
                            {!! $item->display_rating !!}
                        </div>

                        <!-- Descripción -->
                        <p class="text-neutral-600 dark:text-neutral-400 text-sm mb-6 line-clamp-2">
                            Una deliciosa receta que te permitirá crear platos extraordinarios con ingredientes simples
                            y técnicas profesionales.
                        </p>

                        <!-- Botón de acción -->
                        <div class="flex items-center justify-between">
                            <a href="{{ route('recipe.buy', $item->id) }}"
                                class="{{site('btn.primary')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-3">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                Ver receta
                            </a>

                            <!-- Botón de favoritos
                            <button class="p-2 text-neutral-400 hover:text-red-500 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                </svg>
                            </button>-->
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Call to Action
        <div class="text-center mt-16">
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-8 md:p-12 text-white">
                <h3 class="text-2xl md:text-3xl font-bold mb-4">
                    ¿Listo para cocinar algo increíble?
                </h3>
                <p class="text-lg mb-6 text-white/90 max-w-2xl mx-auto">
                    Únete a nuestra comunidad de chefs caseros y descubre recetas que transformarán tu cocina.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#"
                        class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                        Explorar todas las recetas
                    </a>
                    <a href="#"
                        class="inline-flex items-center justify-center gap-2 px-6 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-blue-600 transition-all duration-300">
                        Crear cuenta gratis
                    </a>
                </div>
            </div>
        </div>-->
        <div class="h-44"></div>
    </section>

    <!-- Estilos adicionales -->
    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .splide__slide {
            padding: 0 1rem;
        }

        .splide__track {
            padding: 1rem 0;
        }

        @media (max-width: 768px) {
            .splide__slide {
                padding: 0 0.5rem;
            }
        }
    </style>
</div>
