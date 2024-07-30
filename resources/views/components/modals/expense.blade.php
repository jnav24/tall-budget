@props(['data', 'selectedItem', 'types', 'isTemplate' => true])

{{-- lots of issues. fix one thing, another breaks. --}}
{{-- first issue was me trying to do, prepopulating the form inputs --}}
{{-- first issue is using alpine's x-if causes the component not to be found --}}
{{-- second issue is using blade conditions instead of x-if causes !budgetTemplate || !budgetTemplate[selectedSidebar].length on undefined on .length --}}

{{-- I may have to think of another approach --}}
{{-- have `add item` open it's own model --}}
{{-- iterate with the modals and pass the item into each. so when a user clicks edit, the item is prefilled --}}

{{-- another idea is to use more livewire and less alpine or vice versa --}}

{{-- I have to build a livewire version of the budget template page --}}

<section class="w-200 space-y-8 pt-4">
    <h2 class="px-4 text-2xl text-gray-600">Add <span x-text="sidebarItems.find((item) => item.value === selectedSidebar).label"></span></h2>

    <template x-if="selectedSidebar === 'banks'">
        <livewire:dashboard.bank-form-component :types="$types['banks']" />
    </template>

    <template x-if="selectedSidebar === 'childcare'">
        <livewire:dashboard.childcare-form-component :types="$types['childcare']" />
    </template>
</section>
