<main class="container mx-auto py-6">
    @empty($budgets)
        <x-dashboard.budget-empty />
    @else
        <div
            class="grid grid-cols-4 gap-3"
            x-data="{
                selectedSidebar: '',
                sidebarItems: [],

                init() {
                    this.selectedSidebar = {{ $aggregations[0] }}
                    this.sidebarItems = @js($aggregations);
                    console.log(this.sidebarItems);
                    console.log(Object.values(this.sidebarItems));
                    console.log(this.selectedSidebar);
                }
            }"
        >
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
            </x-dashboard.card>
        </div>
    @endempty
</main>
