@props(['to', 'type' => 'default'])

@php
    $isActive = url()->current() === route($to);

    switch ($type) {
        case 'inverted':
            $linkClass = 'ease-out-in mb-1 flex flex-row items-center rounded p-2 text-white transition duration-300 hover:bg-white hover:bg-opacity-25';

            if ($isActive) {
                $linkClass .= ' text-white bg-dark-primary hover:bg-dark-primary hover:bg-opacity-100';
            }

            break;
        default:
            $linkClass = 'mr-6 flex flex-row items-center py-4 text-gray-600 transition duration-300 ease-out hover:text-primary active:text-primary';

            if ($isActive) {
                $linkClass .= ' text-primary';
            }

            break;
    }
@endphp

<a href="{{ route($to) }}" class="{{ $linkClass }}" wire:navigate>
    {{ $slot }}
</a>
