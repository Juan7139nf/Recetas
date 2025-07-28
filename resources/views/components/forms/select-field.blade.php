<div class="{{ $colrow }}">
    <label for="{{ $id }}" class="block text-sm font-medium text-gray-700 dark:text-gray-100 mb-1">
        {{ $label }}
    </label>

    <div class="relative">
        <select id="{{ $id }}" name="{{ $name }}"
            wire:model="{{ $wireModel }}"
            class="pl-3 pr-3 py-2 block w-full border border-gray-300 dark:border-gray-800 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-400 dark:text-white bg-white dark:bg-gray-900">
            <option value="">{{ $placeholder }}</option>

            @foreach ($options as $option)
                <option value="{{ $option['value'] }}">
                    {{ $option['label'] }}
                </option>
            @endforeach
        </select>
    </div>

    @error($name)
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
