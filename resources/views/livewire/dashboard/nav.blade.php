<?php

use function Livewire\Volt\{state};

$menu = [['to' => 'dashboard.home', 'label' => 'Home', 'icon' => 'icons.home'], ['to' => 'dashboard.budgets', 'label' => 'Budgets', 'icon' => 'icons.chart'], ['to' => 'dashboard.reports', 'label' => 'Reports', 'icon' => 'icons.reports']];
state(['showMobileNav' => false, 'menu' => $menu, 'count' => 0]);

$increment = fn() => $this->count++;

?>

<nav class="relative z-50">
    <div class="relative flex h-16 flex-row items-center bg-primary px-4 py-1">
        <div class="container mx-auto flex flex-row items-center justify-between">
            <div class="flex flex-row items-center">
                @if (!$showMobileNav)
                    <x-icons.menu
                        class="mr-2 block h-8 w-8 cursor-pointer rounded p-1 text-white outline-none focus:bg-dark-primary active:bg-dark-primary sm:hidden" />
                @else
                    <x-icons.closed
                        class="mr-2 block h-8 w-8 cursor-pointer rounded p-1 text-white outline-none focus:bg-dark-primary active:bg-dark-primary sm:hidden" />
                @endif

                <img src="{{ asset('images/logo.png') }}" alt="" class="crisp h-10" />
            </div>

            {{--  Add subnav here  --}}
        </div>
    </div>

    @if ($showMobileNav)
        <div class="absolute z-10 block w-full bg-primary px-4 py-2 sm:hidden">
            @foreach ($menu as $item)
                <x-dashboard.link :to="$item['to']" type="inverted">
                    <x-dynamic-component :component="$item['icon']" class="h-4 w-4" />
                    <span class="ml-2">{{ $item['label'] }}</span>
                </x-dashboard.link>
            @endforeach
        </div>
    @endif

    <div class="hidden bg-white shadow-sm sm:block">
        <div class="container mx-auto flex flex-row">
            @foreach ($menu as $item)
                <x-dashboard.link :to="$item['to']">
                    <x-dynamic-component :component="$item['icon']" class="h-4 w-4" />
                    <span class="ml-2">{{ $item['label'] }}</span>
                </x-dashboard.link>
            @endforeach
        </div>
    </div>
</nav>
