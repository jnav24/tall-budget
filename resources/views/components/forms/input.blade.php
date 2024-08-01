@props([
    'errors' => [],
    'readonly' => false,
    'placeholder' => false,
    'label',
    'type' => 'text',
    'id' => null,
])

@php
    $labelId = preg_replace('/\s+/', '_', strtolower($id ?? $label));
    $hasError = $errors->has($labelId);
@endphp

<div class="relative {{ $type === 'hidden' ? 'hidden' : '' }}">
    @if (!$placeholder || $type !== 'hidden')
        <x-forms.label :label="$label" :label-id="$labelId" :has-error="$hasError" />
    @endif

    <div class="relative mb-2">
        <input
            class="mt-2 w-full rounded border p-2 outline-none {{ $hasError ? 'border-red-600' : 'border-gray-300 focus:border-primary' }} {{ $readonly ? 'bg-gray-200 text-gray-500' : '' }}"
            aria-labelledby="{{ $labelId }}" placeholder="{{ $placeholder ? $label : '' }}" type="{{ $type }}"
            {{ $attributes }} />

        @if ($hasError)
            <span class="text-sm text-red-600">{{ $errors->first($labelId) }}</span>
        @endif
    </div>
</div>
