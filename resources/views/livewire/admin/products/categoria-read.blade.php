<div class="">
    <x-admin.breadcrumb principal="products" secondary="Categoria"
        urlSecondary="{{ route('admin.product.category.browser') }}" name="Ver Categoria" accion="return"
        urlAccion="{{ route('admin.product.category.browser') }}" />

    <div class="p-6 bg-white dark:bg-gray-900 rounded-2xl shadow-md max-w-2xl mx-auto">
        <div class="flex items-center gap-6">
            <img src="{{ $categoria->image_url }}" alt="Imagen"
                class="w-28 h-28 rounded-2xl object-cover border-2 border-gray-200 dark:border-gray-700">

            <div class="space-y-2">
                <h1 class="text-3xl font-extrabold text-gray-900 dark:text-white">
                    {{ $categoria->name }}
                </h1>

                <p class="text-lg text-gray-600 dark:text-gray-300">
                    <span class="font-semibold">Slug:</span> <span class="font-mono">{{ $categoria->slug }}</span>
                </p>

                <p class="text-lg text-gray-600 dark:text-gray-300">
                    <span class="font-semibold">Orden:</span> {{ $categoria->sort_order ?? 'N/A' }}
                </p>

                <p class="text-lg text-gray-600 dark:text-gray-300">
                    <span class="font-semibold">Categoría Padre:</span> {{ $categoria->display_parent }}
                </p>
            </div>
        </div>
    </div>
</div>
