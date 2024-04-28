@extends('layouts.base')
@props(['hasTopPadding' => true])

@section('body')
    <livewire:dashboard.nav />

    <div class="dashboard-content overflow-y-auto bg-gray-200 pt-30 pb-8">
        <div class="container mx-auto {{ $hasTopPadding ? 'pt-8' : '' }}">
            {{ $slot }}
        </div>
    </div>
@endsection
