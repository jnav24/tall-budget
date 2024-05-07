@section('cta')
    <div class="bg-gray-300">
        <div class="container mx-auto py-8">
            <div class="space-y-2 mr-0 sm:mr-64 mb-8 sm:mb-0">
                <h1 class="font-body text-gray-700 text-2xl">Budget Template</h1>
                <p class="text-base font-header text-gray-600">
                    Add all your monthly expenses here! Whenever you create a
                    new budget, the expenses here will automatically show in
                    your new monthly budget. The idea is to not to manually
                    enter the same info more than once.
                </p>
                <p class="text-base font-header text-gray-600">
                    All you have to do is click on the 'Add Expense' button,
                    select the type of expense, enter the details and save your
                    changes.
                </p>
                <p class="text-base font-header text-gray-600">
                    If you were to delete an item on this page, all already
                    existing budgets will be unaffected.
                </p>
            </div>
        </div>
    </div>
@endsection

<main>
    <section class="flex justify-end space-x-2">
        <x-forms.button>
            <x-icons.add class="size-5" />
            <span>Add Item</span>
        </x-forms.button>
        <x-forms.button color="primary">Save Template</x-forms.button>
    </section>
    <div
        class="grid grid-cols-4 gap-3"
        x-data="{
            budgetTemplate: null,
            notifications: [],
            selectedSidebar: '',
            sidebarItems: [],

            init() {
                this.budgetTemplate = @js($budgetTemplate);
                this.sidebarItems = @js($billTypes);
                this.selectedSidebar = this.sidebarItems?.[0]['value'] ?? '';
            },
        }"
    >
        <x-dashboard.sidebar title="Expenses" />

        <div class="col-span-4 md:col-span-3 ml-3 mr-4 sm:mx-0">
            <x-dashboard.card>
                <template x-if="!budgetTemplate">
                    <div class="py-8 text-gray-500 flex flex-col items-center justify-center">
                        <x-icons.warning class="size-8" />
                        <span>This expense is empty</span>
                    </div>
                </template>
            </x-dashboard.card>
        </div>
    </div>
</main>
