@props(['budget-months', 'budget-years', 'next-month', 'current-year'])

<div
    class="w-100"
    x-data="{
        form: { month: @js($nextMonth), year: @js($currentYear) },
        isSubmit: false,

        updateForm(event) {
            const { detail } = event;
            this.form = { ...this.form, ...detail };
        },

        submitForm() {
            this.isSubmit = true;
            $dispatch('close-modal');
            $dispatch('add-new-budget', { form: this.form });
            this.isSubmit = false;
        },
    }"
>
    <h2
        class="text-2xl text-gray-700 font-body mb-4 px-4 pt-2 absolute lg:relative top-0 left-0 w-full bg-white lg:bg-opacity-0"
    >
        Monthly Budget
    </h2>

    <div class="px-4 mb-4 grid grid-cols-2 gap-3" @handle-on-change.window="updateForm($event)">
        <x-forms.select label="Month" :items="$budgetMonths" :value="$nextMonth" />
        <x-forms.select label="Year" :items="$budgetYears" :value="$currentYear"/>
    </div>

    <div
        class="bg-gray-100 rounded-b-lg p-4 flex flex-row items-end justify-end space-x-2"
    >
        <x-forms.button @click="$dispatch('close-modal')">Cancel</x-forms.button>
        <x-forms.button color="secondary" x-bind:disabled="isSubmit" @click="submitForm()">New Budget</x-forms.button>
    </div>
</div>
