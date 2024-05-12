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
    <h2 class="px-4 text-2xl text-gray-600">Add Bank</h2>


    <livewire:dashboard.bank-form-component :template="$isTemplate" />
</section>
