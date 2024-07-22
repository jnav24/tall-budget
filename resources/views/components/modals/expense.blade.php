@props(['isTemplate' => true])

<section
    class="w-200 space-y-8 pt-4"
    x-data="{
        isValid: false,
        form: {
            name: '',
        },

        init() {},

        test() {
            console.log('clicking');
        },
    }"
>
    <h2 class="px-4 text-2xl text-gray-600">Add <span x-text="sidebarItems.find((item) => item.value === selectedSidebar).label"></span></h2>


    <template x-if="selectedSidebar === 'banks'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'childcare'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'credit_cards'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'education'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'entertainment'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'food'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'gift'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'banks'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'housing'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'incomes'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'investments'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'loan'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'medical'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'miscellaneous'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'shopping'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'subscription'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'tax'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'travel'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'utilities'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>

    <template x-if="selectedSidebar === 'vehicles'">
        <livewire:dashboard.bank-form-component :template="$isTemplate" />
    </template>
</section>
