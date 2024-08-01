@props(['selectedItem', 'sidebarItems', 'title'])


@php
$getSelectedStyles = function(string $value) use ($selectedItem): string {
    if ($selectedItem !== $value) {
        return 'text-gray-500 text-sm hover:text-gray-700 hover:bg-gray-100 cursor-pointer px-2 py-2';
    }

    return 'text-gray-700 text-sm cursor-pointer px-2 py-2 bg-gray-300 rounded';
};
@endphp

<div class="py-4 hidden md:block">
    <p class="mb-6 text-lg text-gray-700 font-body">Expenses</p>

    <ul>
        @foreach ($sidebarItems as $item)
            <li class="flex flex-row items-center justify-between {{ $getSelectedStyles($item['value']) }}"
                wire:click="$dispatch('set-selected-item', { value: `{{ $item['value'] }}` })"
            >
                <span>{{ $item['label'] }}</span>
            </li>
        @endforeach
    </ul>
</div>
