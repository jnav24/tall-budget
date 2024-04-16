@extends('layouts.base')
@props(['hasTopPadding' => true])

@section('body')
    <livewire:dashboard.nav />

    <div class="h-screen overflow-y-auto bg-gray-200 pb-32">
        <div class="container mx-auto {{ $hasTopPadding ? 'pt-8' : '' }}">
            {{ $slot }}
        </div>
    </div>
@endsection
