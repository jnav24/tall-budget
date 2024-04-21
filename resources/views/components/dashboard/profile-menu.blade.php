@php
    $profile = [
        ['to' => 'dashboard.settings', 'label' => 'Settings', 'icon' => 'icons.cog'],
        ['action' => "dispatch('handleLogout')", 'label' => 'Logout', 'icon' => 'icons.logout'],
    ];
@endphp

<div
    class="relative"
    x-data="{
        selected: false,

        init() {
            $refs.subNav.classList.add('h-0', 'py-0');

            $watch('selected', (value) => {
                console.log(value);
                if (!value) {
                    setTimeout(() => $refs.subNav.classList.add('h-0', 'py-0'), 400);
                } else {
                    $refs.subNav.classList.remove('h-0', 'py-0');
                }
            })
        },
    }"
    x-cloak
>
    <button
        aria-label="Profile Menu"
        aria-haspopup="true"
        class="ease flex items-center rounded-full border-2 p-2 text-sm transition duration-300 focus:outline-none"
        x-bind:class="{ 'border-white': selected, 'border-primary': !selected }"
        @blur="selected = false"
        @click="selected = !selected"
    >
        <span class="rounded-full bg-white">
            <x-icons.user-circle class="text-primary size-6" />
        </span>

        <span class="ellipsis my-0 ml-4 mr-2 hidden max-w-32 text-white sm:block">
            {{ auth()->user()->profile->fullName }}
        </span>

        <span class="hidden sm:block">
            <span
                class="block transform transition duration-300"
                x-bind:class="{ 'rotate-180': selected, 'rotate-0': !selected }"
            >
                <x-icons.chevron-down class="size-6 text-white" />
            </span>
        </span>
    </button>

    <div
        class="absolute right-0 w-32 transform overflow-hidden rounded-lg bg-white shadow-lg transition delay-100 duration-300 ease-out sm:right-auto sm:w-full"
        :class="{
            'translate-y-16 opacity-0': !selected,
            'translate-y-2 opacity-100': selected,
        }"
        x-ref="subNav"
    >
        @foreach ($profile as $item)
            @if (! empty($item['to']))
                <a
                    class="flex flex-row items-center justify-start px-2 py-3 text-sm text-gray-600 hover:bg-gray-200"
                    href="{{ route($item['to']) }}"
                    wire:navigate
                >
                    <x-dynamic-component :component="$item['icon']" class="size-4" />
                    <span class="ml-2">{{ $item['label'] }}</span>
                </a>
            @elseif(! empty($item['action']))
                <span
                    class="flex cursor-pointer flex-row items-center justify-start px-2 py-3 text-sm text-gray-600 hover:bg-gray-200"
                    wire:click="{{ $item['action'] }}"
                >
                    <x-dynamic-component :component="$item['icon']" class="size-4" />
                    <span class="ml-2">{{ $item['label'] }}</span>
                </span>
            @endif
        @endforeach
    </div>
</div>
