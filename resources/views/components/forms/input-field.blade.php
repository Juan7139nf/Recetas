<div class="{{ $colrow }}">
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700 dark:text-gray-100 mb-1">
        {{ $label }}
    </label>
    <div class="relative">
        @if ($icon)
            <span class="absolute left-3 top-2.5 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="{{ $viewBox }}">
                    {!! $icon !!}
                </svg>
            </span>
        @endif
        <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}"
            wire:model.defer="{{ $wireModel }}"
            class="{{ $icon ? 'pl-10' : 'pl-3' }} pr-3 py-2 block w-full border border-gray-300 dark:border-gray-800 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400 dark:text-white"
            placeholder="{{ $placeholder }}" {{ $other }} />
    </div>
    @error($name)
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
