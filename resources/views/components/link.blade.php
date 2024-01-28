@props(['to'])

<a href="{{ $to }}" class="text-gray-700 underline text-sm hover:no-underline"
    wire:navigate>
    {{ $slot }}
</a>
