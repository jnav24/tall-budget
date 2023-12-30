@props(['block' => false, 'color' => 'default', 'fab' => false])

@php
    $colors = [
        'danger' => 'bg-danger hover:bg-opacity-85 active:bg-dark-danger',
        'default' => 'border border-gray-300 bg-white text-gray-700 hover:bg-gray-100 active:bg-gray-200',
        'primary' => 'bg-primary text-white hover:bg-opacity-85 active:bg-dark-primary',
        'secondary' => 'bg-secondary text-gray-700 hover:bg-opacity-85 active:bg-dark-secondary',
    ];
@endphp

<button
    class="focus:shadow-outline rounded transition duration-150 focus:outline-none {{ $colors[$color] ?? $colors['default'] }} {{ $block ? 'w-full' : '' }} {{ $fab ? 'rounded-full p-2' : 'rounded-md px-6 py-3 text-sm' }}"
    {{ $attributes }}>
    <span class="flex flex-row items-center justify-center">
        {{ $slot }}
    </span>
</button>
