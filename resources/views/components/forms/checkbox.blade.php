@props([
    'checked',
    'errors' => [],
    'readonly' => false,
    'label',
])

@php
    $labelId = preg_replace('/\s+/', '_', strtolower($label));
    $hasError = $errors->has($labelId);
@endphp

<div class="">
    <div class="flex flex-row items-center space-x-2">
        <x-forms.button checkbox {{ $attributes }} color="{{ $checked ? 'primary' : 'default' }}">
            <x-icons.check class="size-4 text-white {{ !$checked ? 'invisible' : '' }}" />
        </x-forms.button>
        <x-forms.label :label="$label" :label-id="$labelId" :has-error="$hasError" />
    </div>

    @if ($hasError)
        <span class="text-sm text-red-600">{{ $errors->first($labelId) }}</span>
    @endif
</div>
