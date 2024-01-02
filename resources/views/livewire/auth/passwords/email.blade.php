@section('title', 'Reset password')

@section('footer')
    <div class="text-sm leading-5">
        <a href="{{ route('login') }}"
            class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
            Login
        </a>
    </div>
@endsection

<div>
    <h1 class="mb-8 text-center font-header text-2xl text-gray-800 sm:text-gray-600">
        Forgot Password?
    </h1>

    <p class="mb-8 text-center text-sm text-gray-600">
        Enter your email and we will send you a link with instructions on resetting your password.
    </p>

    @if ($emailSentMessage)
        <x-forgot-password.email-message :email-sent-message="$emailSentMessage" />
    @else
        <form wire:submit.prevent="sendResetPasswordLink">
            <x-forms.input label="Email" :errors="$errors" wire:model.blur="email" />

            <div class="mt-6">
                <x-forms.button color="secondary" :block="true" wire:loading.attr="disabled"
                    type="submit">Send password reset link</x-forms.button>
            </div>
        </form>
    @endif
</div>
