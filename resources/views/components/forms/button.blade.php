@props(['block' => false, 'class' => '', 'color' => 'default', 'disabled' => false, 'fab' => false, 'checkbox' => false])

@php
    $colors = [
        'danger' => 'bg-danger hover:bg-opacity-85 active:bg-dark-danger',
        'default' => 'border border-gray-300 bg-white text-gray-700 hover:bg-gray-100 active:bg-gray-200',
        'primary' => 'bg-primary text-white hover:bg-opacity-85 active:bg-dark-primary',
        'secondary' => 'bg-secondary text-gray-700 hover:bg-opacity-85 active:bg-dark-secondary',
    ];

    $styles = [
        $disabled ? 'bg-gray-300 cursor-text text-gray-500' : $colors[$color] ?? $colors['default'],
        $block ? 'w-full' : '',
        $fab && !$checkbox ? 'rounded-full p-2' : '',
        !$fab && $checkbox ? 'p-1 rounded-md' : '',
        !$fab && !$checkbox ? 'rounded-md px-6 py-3 text-sm' : '',
        'focus:shadow-outline rounded transition duration-150 focus:outline-none',
        $class
    ];

    $styles = implode(" ", $styles);
@endphp

<button class="{{ $styles }}" {{ $attributes }}>
    <span class="flex flex-row items-center justify-center space-x-2">
        {{ $slot }}
    </span>
</button>
