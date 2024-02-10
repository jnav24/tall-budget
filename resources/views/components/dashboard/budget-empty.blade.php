<section class="flex h-screen w-full items-center">
    <div class="mx-auto text-center">
        <x-icons.exclamation-triangle class="mx-auto h-48 text-secondary" />
        <div class="my-4">
            <h1 class="mb-3 text-2xl text-gray-600">No Budgets Found</h1>
            <p class="text-md text-gray-500">You don't have any budgets currently.</p>
            <p class="text-md text-gray-500">Click the button below to add one.</p>
        </div>
        <x-forms.button color="secondary">
            <x-icons.add class="h-4" />
            <span>Add Budget</span>
        </x-forms.button>
    </div>
</section>
