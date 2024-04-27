<main class="container mx-auto py-6">
    @empty($budgets)
        <x-dashboard.budget-empty />
    @else
        <x-dashboard.modal>
            <div style="width: 200px; height: 200px">
                why not working
            </div>
        </x-dashboard.modal>

        <x-dashboard.modal name="budget-modal">
            <x-modals.budget
                :budget-months="$allMonths"
                :budget-years="$allYears"
                :next-month="$nextBudget"
                :current-year="$currentYear"
            />
        </x-dashboard.modal>

        <div class="flex flex-col sm:flex-row items-center justify-end pl-4 pr-2 sm:px-0 space-x-2" x-data>
            <x-forms.button class="mb-4 sm:mb-0 w-full sm:w-auto" color="secondary">
                <x-icons.pencil-square class="size-4 mr-2" />
                <span>Edit Template</span>
            </x-forms.button>

            <x-forms.button class="mb-4 sm:mb-0 w-full sm:w-auto pr-2" color="primary" @click="$dispatch('open-modal', { name: 'budget-modal' })">
                <span class="flex-1">Add Budget</span>
                <span class="border-l border-dark-primary border-opacity-25 ml-4 pl-2">
                    <x-icons.chevron-down class="size-4 mr-2" />
                </span>
            </x-forms.button>
        </div>

        <div class="grid grid-cols-4 gap-3" x-data="{
            budgets: [],
            selectedSidebar: '',
            sidebarItems: [],

            init() {
                this.budgets = @js($budgets);
                this.selectedSidebar = {{ $allYears[0]['value'] }};
                this.sidebarItems = @js($allYears);
            },

            get maxSaved() {
                const amounts = (this.budgets?.[this.selectedSidebar] ?? []).map((budget) => +budget.saved);
                return Math.max(...amounts).toString();
            },
        }">
            <x-dashboard.sidebar title="Years" />

            <x-dashboard.card class="col-span-4 md:col-span-3 ml-3 mr-4 sm:mx-0">
                <x-slot:header class="bg-gray-100 rounded-t-lg">
                    <div>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 text-gray-900">
                            <div class="hidden sm:block"></div>
                            <div>Name</div>
                            <div class="hidden sm:block">Saved</div>
                            <div>Actions</div>
                        </div>
                    </div>
                </x-slot:header>

                <template x-if="!budgets[selectedSidebar]?.length">
                    <div class="py-8 text-gray-500 flex flex-col items-center justify-center">
                        <x-icons.warning class="size-8" />
                        <span>There are no budgets for <span x-text="selectedSidebar"></span></span>
                    </div>
                </template>

                <template x-for="budget in (budgets[selectedSidebar] ?? [])">
                    <div
                        class="grid grid-cols-2 sm:grid-cols-4 gap-2 text-gray-700 py-4 even:bg-gray-100 items-center">
                        <div class="hidden sm:flex flex-row justify-start pl-16">
                            <template x-if="budget.saved < 0">
                                <x-icons.trend-down class="size-8 text-danger" />
                            </template>
                            <template x-if="budget.saved >= 0">
                                <x-icons.trend-up class="size-8 text-primary" />
                            </template>
                            <template x-if="budget.saved === maxSaved">
                                <x-icons.fire class="size-8 text-orange-400" />
                            </template>
                        </div>
                        <div class="pl-4 sm:pl-0" x-text="budget.name"></div>
                        <div class="hidden sm:block" x-text="budget.saved_dollar"></div>
                        <div>
                            <x-forms.button color="secondary" fab>
                                <x-icons.pencil-square class="size-4" />
                            </x-forms.button>

                            <x-forms.button color="danger" fab>
                                <x-icons.ban class="size-4 text-white" />
                            </x-forms.button>
                        </div>
                    </div>
                </template>
            </x-dashboard.card>
        </div>
    @endempty
</main>
