@extends('layouts.base')

@section('body')
    <livewire:dashboard.nav />

    <div class="h-screen overflow-y-auto bg-gray-200 pb-32">
        <div class="container mx-auto" :class="{ 'pt-8': !noTopPadding }">
            {{ $slot }}
        </div>
    </div>
@endsection
