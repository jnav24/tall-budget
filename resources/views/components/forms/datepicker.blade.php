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

<div
    class="relative"
    x-data="{
        selected: false,

        init() {
            const setSelected = (e) => this.selected = false;
            const stopPropagation = (e) => e.stopPropagation();

            $watch('selected', (v) => {
                this.handleCalendarOffClick(v, setSelected, stopPropagation);
            });
        },

        handleCalendarOffClick(v, setSelected, stopPropagation) {
            if (v) {
                $refs.datePicker.addEventListener('click', stopPropagation);
                setTimeout(() => {
                    document.body.addEventListener('click', setSelected);
                }, 200);
            } else {
                $refs.datePicker.removeEventListener('click', stopPropagation);
                document.body.removeEventListener('click', setSelected);
            }
        },
    }"
    x-ref="datePicker"
>
    @if (!$placeholder)
        <x-forms.label :label="$label" :label-id="$labelId" :has-error="$hasError" />
    @endif

    <div class="relative mb-2">
        <div class="absolute left-0 top-2 flex flex-col items-center justify-center h-[2.65rem] w-10 bg-gray-600 rounded-l-md"
             @click="selected = !selected">
            <x-icons.calendar class="text-white size-5" />
        </div>

        <input
            class="mt-2 w-full rounded border p-2 outline-none {{ $hasError ? 'border-red-600' : 'border-gray-300 focus:border-primary' }} {{ $readonly ? 'bg-gray-200 text-gray-500' : '' }}"
            @click="selected = !selected"
            aria-labelledby="{{ $labelId }}" placeholder="{{ $placeholder ? $label : '' }}" type="text"
            {{ $attributes }} />

        @if ($hasError)
            <span class="text-sm text-red-600">{{ $errors->first($labelId) }}</span>
        @endif

        <div
            class="bg-white px-4 py-3 absolute left-0 top-0 w-64 min-h-64 shadow-2xl z-50 origin-top-left transform translate-y-12 transition ease-out duration-200"
            x-bind:class="{
                'scale-100 opacity-100': selected,
                'scale-0 opacity-0': !selected,
            }"
        ></div>
    </div>
</div>
