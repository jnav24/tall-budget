@extends('layouts.base')

@section('body')
    <div class="flex min-h-screen flex-col items-center justify-center">
        <div class="absolute left-0 top-0 z-20 h-full w-full bg-gray-100 sm:bg-primary sm:bg-opacity-75">
        </div>
        <div class="bg-image"></div>

        <div
            class="relative z-30 mt-6 w-full overflow-hidden px-4 pt-4 text-left sm:w-100 sm:rounded-lg sm:bg-white sm:px-0 sm:shadow-md">
            <div class="mb-4 flex flex-row justify-center">
                <div class="h-16 w-16 overflow-hidden">
                    <img src="{{ asset('images/logo_1.png') }}" alt="Dime Budget" style="max-width: 12rem"
                        class="crisp h-full w-64" />
                </div>
            </div>

            <div class="px-0 pb-6 sm:px-6 sm:shadow-sm">
                @yield('content')

                @isset($slot)
                    {{ $slot }}
                @endisset
            </div>

            <div v-if="$slots.footer"
                class="flex flex-row items-center justify-center px-6 py-4 sm:justify-end sm:bg-gray-100">
                @yield('footer')
            </div>
        </div>
    </div>
@endsection
