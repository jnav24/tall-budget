@props(['to', 'button' => false])

@php
    $styles = match ($button) {
        true => 'bg-secondary text-gray-700 hover:bg-opacity-85 active:bg-dark-secondary rounded-md px-6 py-3 text-sm flex items-center',
        default => 'text-gray-700 underline text-sm hover:no-underline'
    }
@endphp

<a href="{{ $to }}" class="{{ $styles }}"
    wire:navigate>
    {{ $slot }}
</a>
