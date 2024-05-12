<form wire:submit.prevent="save">
    <div class="grid grid-cols-2 gap-4 px-4">
        <x-forms.input label="Name" :errors="$errors" wire:model.blur="name" />
        <x-forms.input label="Amount" :errors="$errors" wire:model.blur="amount" />
        <x-forms.select label="Account Type" :errors="$errors" :items="$types" />
    </div>

    <div class="flex justify-end items-center space-x-2 bg-gray-100 rounded-b-lg p-4 mt-8">
        <x-forms.button
            @click="$dispatch('close-modal')"
            wire:click="resetForm()"
            type="button"
        >
            Cancel
        </x-forms.button>
        <x-forms.button
            color="primary"
            wire:loading.attr="disabled"
            type="submit"
        >
            Save
        </x-forms.button>
    </div>
</form>
