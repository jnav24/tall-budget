@props([
    'errors' => [],
    'readonly' => false,
    'placeholder' => false,
    'label',
    'name' => null,
    'value',
])

@php
    $labelId = preg_replace('/\s+/', '_', strtolower($label));
    $formLabel = empty($name) ? $labelId : $name;
    $hasError = $errors->has($formLabel);
@endphp

<div
    class="relative"
    x-data="{
        dateCounter: 0,
        daysHeader: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        formLabel: @js($formLabel),
        selected: false,
        selectedDate: new Date(),

        init() {
            this.selectedDate = this.formatDate(@js($value));
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

        get currentDate() {
            const d = new Date();
            d.setMonth(d.getMonth() + this.dateCounter);
            return d;
        },

        get dateHeader() {
            const d = this.currentDate;
            return d.toLocaleString('default', { month: 'long', year: 'numeric' });
        },

        getFirstDayOfTheMonth() {
            const d = this.currentDate;
            return new Date(d.getFullYear(), d.getMonth(), 1).toLocaleString('en-US', { weekday: 'short' });
        },

        getLastDateOfTheMonth() {
            const d = this.currentDate;
            return new Date(d.getFullYear(), d.getMonth() + 1, 0).getDate();
        },

        get datesOfTheMonth() {
            const buffer = Array.from(
                Array(this.daysShort.indexOf(this.getFirstDayOfTheMonth())).keys(),
                num => 60 + num,
            );

            const dates = Array.from(Array(this.getLastDateOfTheMonth()).keys());

            return buffer.concat(dates);
        },

        selectDate(date) {
            const d = this.currentDate;
            d.setDate(date);
            this.selectedDate = this.formatDate(d);
            this.selected = false;
            $dispatch('handle-datepicker-change', { data: { [this.formLabel]: d } });
        },

        isToday(date) {
            const d = this.currentDate;
            d.setDate(date);
            return this.formatDate(d) === this.formatDate(new Date());
        },

        isSelected(date) {
            const d = this.currentDate;
            d.setDate(date);
            return this.formatDate(d) === this.selectedDate;
        },

        formatDate(d) {
            if (!(d instanceof Date)) {
                d = new Date(d);
            }

            if (isNaN(Date.parse(d))) {
                d = new Date();
            }

            return d.toLocaleString('default', { year: 'numeric', month: '2-digit', day: '2-digit' });
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
            class="mt-2 w-full rounded border py-2 pl-12 pr-2 outline-none {{ $hasError ? 'border-red-600' : 'border-gray-300 focus:border-primary' }} text-gray-400"
            @click="selected = !selected"
            readonly
            aria-labelledby="{{ $labelId }}" placeholder="{{ $placeholder ? $label : '' }}" type="text"
            x-model="selectedDate"
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
                <template x-for="(day, idx) in daysHeader" :key="idx">
                    <span class="text-center text-sm text-gray-500" x-text="day"></span>
                </template>
            </div>

            <div class="grid-cols-7 gap-1 grid">
                <template x-for="(d, idx) in datesOfTheMonth" :key="idx">
                    <span>
                        <template x-if="d > 31">
                            <span>&nbsp;</span>
                        </template>

                        <template x-if="d < 32">
                            <button
                                class="text-sm py-1 rounded-full text-center w-full focus:outline-none focus:shadow-outline"
                                x-bind:class="{
                                    'text-gray-600 bg-white hover:bg-gray-200 border-0': !isSelected(d + 1) && !isToday(d + 1),
                                    'text-white bg-primary border-0': isSelected(d + 1),
                                    'text-primary shadow-inner bg-gray-200': !isSelected(d + 1) && isToday(d + 1),
                                }"
                                @click="selectDate(d + 1)"
                                type="button">
                                <span x-text="d + 1"></span>
                            </button>
                        </template>
                    </span>
                </template>
            </div>
        </div>
    </div>
</div>
