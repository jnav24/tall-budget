<div class="w-100" x-data="{ isSubmit: false }">
    <h2
        class="text-2xl text-gray-700 font-body mb-4 px-4 pt-2 absolute lg:relative top-0 left-0 w-full bg-white lg:bg-opacity-0"
    >
        Monthly Budget
    </h2>

    <div class="px-4 mb-4 grid grid-cols-2 gap-3">
        Content here
    </div>

    <div
        class="bg-gray-100 rounded-b-lg p-4 flex flex-row items-end justify-end space-x-2"
    >
        <x-forms.button @click="$dispatch('close-modal')">Cancel</x-forms.button>
        <x-forms.button color="secondary" x-bind:disabled="isSubmit" @click="isSubmit = true; $dispatch('add-new-budget');">New Budget</x-forms.button>
    </div>
</div>
