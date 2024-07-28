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
        dateCounter: 0,
        days: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
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

        decrementDateCounter() {
            this.dateCounter--;
        },

        incrementDateCounter() {
            this.dateCounter++;
        },

        dateHeader() {
            const d = new Date();
            d.setMonth(d.getMonth() + this.dateCounter);
            return d.toLocaleString('default', { month: 'long', year: 'numeric' });
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
            class="mt-2 w-full rounded border py-2 pl-12 pr-2 outline-none {{ $hasError ? 'border-red-600' : 'border-gray-300 focus:border-primary' }} {{ $readonly ? 'bg-gray-200 text-gray-500' : '' }}"
            @click="selected = !selected"
            readonly
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
        >
            <div class="flex flex-row items-center justify-between text-gray-700">
                <x-forms.button fab @click="decrementDateCounter()">
                    <x-icons.chevron-left class="size-4 cursor-pointer" />
                </x-forms.button>
                <span class="text-sm" x-text="dateHeader"></span>
                <x-forms.button fab @click="incrementDateCounter()">
                    <x-icons.chevron-right class="size-4 cursor-pointer" />
                </x-forms.button>
            </div>

            <div class="grid-cols-7 gap-1 grid my-2">
                <template x-for="(day, idx) in days" :key="idx">
                    <span class="text-center text-sm text-gray-500" x-text="day"></span>
                </template>
            </div>
        </div>
    </div>
</div>
