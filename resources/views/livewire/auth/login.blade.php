@section('title', 'Sign in to your account')

@section('footer')
    <div class="text-sm leading-5">
        <a href="{{ route('password.request') }}"
            class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
            Forgot your password?
        </a>
    </div>
@endsection

<section>
    <h1 class="mb-8 text-center font-header text-2xl text-gray-800 sm:text-gray-600">
        Welcome Back
    </h1>

    <form wire:submit.prevent="authenticate">
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
            <span class="block w-full rounded-md shadow-sm">
                <button wire:loading.attr="disabled" type="submit"
                    class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                    Sign in
                </button>
            </span>
        </div>
    </form>
</section>
