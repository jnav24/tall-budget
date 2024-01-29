@section('title', 'Sign in to your account')

@section('footer')
    <x-link :to="route('password.request')">Forgot your password?</x-link>
@endsection

<section>
    <h1 class="mb-8 text-center font-header text-2xl text-gray-800 sm:text-gray-600">
        Welcome Back
    </h1>

    <form wire:submit.prevent="authenticate">
        @csrf
        <x-forms.input label="Email" :errors="$errors" wire:model.blur="email" />
        <x-forms.input label="Password" :errors="$errors" type="password" wire:model.blur="password" />

        <div class="flex items-center justify-between mt-6">
            <div class="flex items-center">
                <input wire:model.lazy="remember" id="remember" type="checkbox"
                    class="form-checkbox w-4 h-4 text-indigo-600 transition duration-150 ease-in-out" />
                <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                    Remember
                </label>
            </div>
        </div>

        <div class="mt-6">
            <x-forms.button color="secondary" :block="true" wire:loading.attr="disabled"
                type="submit">Sign in</x-forms.button>
        </div>
    </form>
</section>
