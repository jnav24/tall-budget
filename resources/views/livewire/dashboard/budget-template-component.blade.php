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

@php
    use Illuminate\Support\Arr;

    $budgetValue = Arr::get($budgetTemplate, $selectedItem, []);
@endphp

<main>
    <x-dashboard.modal>
        <x-modals.expense :data="$budgetTemplate" :selected-item="$selectedItem" :types="$expenseTypes" />
    </x-dashboard.modal>

    <section class="flex justify-end space-x-2">
        <x-forms.button @click="$dispatch('open-modal')" wire:click="setSelectedExpense(3)">
            <x-icons.add class="size-5" />
            <span>Add Item</span>
        </x-forms.button>

        <x-forms.button color="primary" @click="$dispatch('save-template')">
            Save Template
        </x-forms.button>
    </section>

    <div class="grid grid-cols-4 gap-3">
        <div class="flex-col">
            Expenses

            <button wire:click="setSelectedSidebar('banks')">Banks</button>
            <button wire:click="setSelectedSidebar('childcare')">Childcare</button>
            <p>{{ $budgetTemplate[$selectedItem] }}</p>
        </div>

        <div class="col-span-4 md:col-span-3 ml-3 mr-4 sm:mx-0">
            <x-dashboard.card>
                @if(!count($budgetValue))
                    <div class="py-8 text-gray-500 flex flex-col items-center justify-center">
                        <x-icons.warning class="size-8" />
                        <span>This expense is empty</span>
                    </div>
                @endif

                @if(!empty($budgetTemplate[$selectedItem]))
                    <x-slot:header class="bg-gray-100 rounded-t-lg">
                        <div class="grid grid-cols-2 sm:grid-cols-6">
                            <div>Name</div>
                            <div>Type</div>
                            <div>Amount</div>
                            <div>Paid Date</div>
                            <div>Actions</div>
                        </div>
                    </x-slot:header>

                    @foreach($budgetTemplate[$selectedItem] as $item)
                        <div class="grid grid-cols-2 odd:bg-gray-100 px-2 py-4 text-gray-700 items-center sm:grid-cols-6">
                            <div>{{ $item->name }}</div>
                            <div>{{ $item->type->name }}</div>
                            <div>{{ $item->amount }}</div>
                            <div>
                                <x-forms.button color="secondary" fab>
                                    <x-icons.pencil-square class="size-5"></x-icons.pencil-square>
                                </x-forms.button>
                                <x-forms.button color="danger" fab>
                                    <x-icons.ban class="size-5 text-white"></x-icons.ban>
                                </x-forms.button>
                            </div>
                        </div>
                    @endforeach
                @endif
            </x-dashboard.card>
        </div>
    </div>
</main>
<main
    x-data="{
        budgetTemplate: null,
        expenseTypes: [],
        notifications: [],
        selectedSidebar: '',
        selectedItem: '',
        sidebarItems: [],

        init() {
            this.budgetTemplate = @js($budgetTemplate);
            this.expenseTypes = @js($expenseTypes);
            this.sidebarItems = @js($billTypes);
            this.selectedSidebar = this.sidebarItems?.[0]['value'] ?? '';
            // $dispatch('set-selected-item', { value: 'banks' });

            $watch('selectedSidebar', (value) => {
                console.log('budgetTemplate', this.budgetTemplate);
                console.log('selectedSidebar', value);
                console.log('sidebar items', this.sidebarItems);
                console.log('expense types', this.expenseTypes);
                // $dispatch('set-selected-item', { value });
            });
        },

        addExpense() {},

        updateExpense() {},

        formatAmount() {
            return new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',
            });
        },

        formatDate(timestamp) {
            const d = new Date(timestamp);
            const month = new Intl.DateTimeFormat('en-US', { month: 'short' }).format(d);
            return `${month} ${d.getDate()}`;
        },
    }"
>
    <x-dashboard.modal>
        <x-modals.expense :data="$budgetTemplate" :selected-item="$selectedItem" :types="$expenseTypes" />
    </x-dashboard.modal>

    <section class="flex justify-end space-x-2">
        <x-forms.button @click="$dispatch('open-modal')" wire:click="setSelectedExpense(3)">
            <x-icons.add class="size-5" />
            <span>Add Item</span>
        </x-forms.button>

        <x-forms.button color="primary" @click="$dispatch('save-template')">
            Save Template
        </x-forms.button>
    </section>

    <div class="grid grid-cols-4 gap-3">
        <x-dashboard.sidebar title="Expenses" />

        <div class="col-span-4 md:col-span-3 ml-3 mr-4 sm:mx-0">
            <x-dashboard.card>
                <template x-if="!budgetTemplate || !(budgetTemplate[selectedSidebar] ?? []).length">
                    <div class="py-8 text-gray-500 flex flex-col items-center justify-center">
                        <x-icons.warning class="size-8" />
                        <span>This expense is empty</span>
                    </div>
                </template>

                <template x-if="budgetTemplate && budgetTemplate[selectedSidebar].length">
                    <x-slot:header class="bg-gray-100 rounded-t-lg">
                        <div class="grid grid-cols-2"
                             x-bind:class="{
                                'sm:grid-cols-6': !['banks', 'incomes'].includes(selectedSidebar),
                                'sm:grid-cols-5': ['incomes'].includes(selectedSidebar),
                                'sm:grid-cols-4': ['banks'].includes(selectedSidebar),
                            }">
                            <template x-if="!['banks', 'incomes'].includes(selectedSidebar)">
                                <div></div>
                            </template>
                            <div>Name</div>
                            <div>Type</div>
                            <div>Amount</div>
                            <template x-if="!['banks', 'incomes'].includes(selectedSidebar)">
                                <div>Paid Date</div>
                            </template>
                            <template x-if="['incomes'].includes(selectedSidebar)">
                                <div>Date</div>
                            </template>
                            <div>Actions</div>
                        </div>
                    </x-slot:header>

                    <template x-for="(item) in budgetTemplate[selectedSidebar]">
                        <div class="grid grid-cols-2 odd:bg-gray-100 px-2 py-4 text-gray-700 items-center"
                             x-bind:class="{
                                'sm:grid-cols-6': !['banks', 'incomes'].includes(selectedSidebar),
                                'sm:grid-cols-5': ['incomes'].includes(selectedSidebar),
                                'sm:grid-cols-4': ['banks'].includes(selectedSidebar),
                            }">
                            <template x-if="!['banks', 'incomes'].includes(selectedSidebar)">
                                <div></div>
                            </template>
                            <div x-text="item.name"></div>
                            <div x-text="item.type.name"></div>
                            <div x-text="formatAmount().format(item.amount)"></div>
                            <template x-if="['incomes'].includes(selectedSidebar)">
                                <div x-text="item.paid_date"></div>
                            </template>
                            <div>
                                <x-forms.button color="secondary" fab>
                                    <x-icons.pencil-square class="size-5"></x-icons.pencil-square>
                                </x-forms.button>
                                <x-forms.button color="danger" fab>
                                    <x-icons.ban class="size-5 text-white"></x-icons.ban>
                                </x-forms.button>
                            </div>
                        </div>
                    </template>

                    <x-slot:footer class="bg-gray-100"></x-slot:footer>
                </template>
            </x-dashboard.card>
        </div>
    </div>
</main>
