@section('title', 'Create a new account')

@section('footer')
    <x-link :to="route('login')">Login</x-link>
@endsection

<div>
    <h1 class="mb-8 text-center font-header text-2xl text-gray-800 sm:text-gray-600">
        Welcome Back
    </h1>

    <form wire:submit.prevent="register">
        <x-forms.input label="First Name" :errors="$errors" wire:model.blur="email" />
        <x-forms.input label="Last Name" :errors="$errors" wire:model.blur="email" />
        <x-forms.input label="Email" :errors="$errors" wire:model.blur="email" />
        <x-forms.input label="Password" :errors="$errors" type="password"
            wire:model.blur="password" />
        <x-forms.input label="Confirm Password" :errors="$errors" type="password"
            wire:model.blur="passwordConfirmation" />

        <div class="mt-6">
            <x-forms.button color="secondary" :block="true" wire:loading.attr="disabled"
                type="submit">Register</x-forms.button>
        </div>
    </form>
</div>
