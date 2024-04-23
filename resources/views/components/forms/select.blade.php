@props(['label', 'placeholder' => 'Select', 'isDisabled' => false])

@php
    $labelId = preg_replace('/\s+/', '_', strtolower($label));
    $hasError = $errors->has($labelId);

    $styles = [
        'border-solid border px-2 py-2 mt-2 rounded-md flex items-center justify-between outline-none transform relative',
        $isDisabled ? 'bg-gray-200 border-gray-300 cursor-text text-gray-500' : '',
        !$isDisabled && !$hasError ? 'border-gray-300 hover:border-gray-600 bg-white cursor-pointer text-gray-600 hover:text-gray-700 focus:border-primary transition duration-300' : '',
        !$isDisabled && $hasError ? 'border-red-600 bg-white text-red-600' : '',
    ];

    $styles = join(' ', $styles);
@endphp

<x-forms.label :label="$label" :label-id="$labelId" :has-error="$hasError" />

<div
    class="{{ $styles }}"
    tabindex="0"
    x-data="{
        isDisabled: @js($isDisabled),
        selected: false,

        get placeHolder() {
            return @js($placeholder);
        },

        init() {
            $refs.dropDownItems.classList.add('h-0', 'py-0');
        },

        handleBlur() {
            if (!this.isDisabled) {
                this.selected = false;
            }
        },

        handleClick() {
            if (!this.isDisabled) {
                this.selected = !this.selected;
            }
        },
    }"
    x-bind:class="{ 'z-50': selected, 'z-0': !selected }"
    @blur="handleBlur()"
    @click="handleClick()"
>
    <span class="flex-1" x-text="placeHolder"></span>
    <span
        class="transform transition duration-300"
        x-bind:class="{ 'rotate-180': selected, 'rotate-0': !selected }"
    >
        <x-icons.chevron-down class="size-6" />
    </span>

    <div
        class="bg-white border border-gray-300 shadow-sm absolute transform top-0 left-0 rounded w-full transition ease-out duration-300 max-h-48 overflow-y-auto"
        x-bind:class="{
            'translate-y-12 opacity-100': selected,
            'translate-y-0 opacity-0': !selected,
        }"
        ref="dropDownItems"
    >
        items here
    </div>
</div>
