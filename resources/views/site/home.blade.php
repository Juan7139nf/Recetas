<div class="flex flex-col gap-4">
    <div class="absolute top-25 w-full">
        <div class="splide mi-carousel-interval-autoplay">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($carrousel as $item)
                        <li class="splide__slide">
                            <div
                                class="group flex rounded-sm w-full h-full flex-col overflow-hidden border border-neutral-300 bg-neutral-50 text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                                <div class="h-44 md:h-64 overflow-hidden">
                                    <img src="{{ asset('storage/' . $item->cover['url']) }}"
                                        class="object-cover transition duration-700 ease-out group-hover:scale-105"
                                        alt="{{ $item->title }}" />
                                </div>
                                <div class="flex flex-col gap-4 p-6">
                                    <span class="text-sm font-medium">{{ $item->license }}</span>
                                    <h3 class="text-balance text-xl lg:text-2xl font-bold text-neutral-900 dark:text-white"
                                        aria-describedby="featureDescription">{{ $item->title }}</h3>
                                    <a href="{{ route('recipe.read', $item->id) }}"
                                        class="w-fit font-medium mt-auto text-black underline-offset-2 hover:underline focus:underline focus:outline-hidden dark:text-white">
                                        Leer receta
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            stroke="currentColor" fill="none" stroke-width="2.5" aria-hidden="true"
                                            class="inline size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <br>
        <div
            class="lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 grid w-full gap-6 border-neutral-300 bg-neutral-50 p-6 dark:border-neutral-700 dark:bg-neutral-900 rounded-sm border">
            @foreach ($recetas as $item)
                <div class="group relative">
                    <article
                        class="group flex rounded-sm w-full h-full flex-col overflow-hidden border border-neutral-300 bg-neutral-50 text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                        <!-- Image -->
                        <div class="h-44 md:h-64 overflow-hidden">
                            <img src="{{ asset('storage/' . $item->cover['url']) }}"
                                class="object-cover transition duration-700 ease-out group-hover:scale-105"
                                alt="{{ $item->title }}" />
                        </div>
                        <!-- Content -->
                        <div class="flex flex-col gap-4 p-6">
                            <!-- Header -->
                            <div class="flex flex-col md:flex-row gap-4 md:gap-12 justify-between">
                                <!-- Title & Rating -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg lg:text-xl font-bold text-neutral-900 dark:text-white"
                                        aria-describedby="productDescription">{{ $item->title }}</h3>
                                    <!-- Rating -->
                                    <div class="flex items-center gap-1">
                                        <span class="sr-only">Rated 3 stars</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-4 text-amber-500" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-4 text-amber-500" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-4 text-amber-500" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-4 text-neutral-600/50 dark:text-neutral-300/50"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="size-4 text-neutral-600/50 dark:text-neutral-300/50"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <!-- Button -->
                                <a href="{{route('recipe.buy', $item->id)}}">Ver</a>

                                <span class="text-xl"><span class="sr-only">Precio</span>{{ $item->price }} Bs</span>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</div>
