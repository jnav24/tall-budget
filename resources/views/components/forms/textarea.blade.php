@props([
    'errors' => [],
    'readonly' => false,
    'placeholder' => false,
    'label',
])

@php
    $labelId = preg_replace('/\s+/', '_', strtolower($label));
    $hasError = $errors->has($labelId);
@endphp

<div class="relative">
    @if (!$placeholder)
        <x-forms.label :label="$label" :label-id="$labelId" :has-error="$hasError" />
    @endif

    <div class="relative mb-2">
        <textarea
            class="mt-2 w-full rounded border p-2 outline-none {{ $hasError ? 'border-red-600' : 'border-gray-300 focus:border-primary' }} {{ $readonly ? 'bg-gray-200 text-gray-500' : '' }}"
            aria-labelledby="{{ $labelId }}" placeholder="{{ $placeholder ? $label : '' }}"
            {{ $attributes }}></textarea>

        @if ($hasError)
            <span class="text-sm text-red-600">{{ $errors->first($labelId) }}</span>
        @endif
    </div>
</div>
