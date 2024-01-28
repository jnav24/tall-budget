<?php

namespace App\Livewire\Auth\Passwords;

use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('layouts.auth')]
class Email extends Component
{
    #[Rule('required|email')]
    public string $email;

    public null|string|bool $emailSentMessage = false;

    public function sendResetPasswordLink(): void
    {
        $this->validate();

        $response = $this->broker()->sendResetLink(['email' => $this->email]);

        if ($response == Password::RESET_LINK_SENT) {
            $this->emailSentMessage = trans($response);

            return;
        }

        $this->addError('email', trans($response));
    }

    /**
     * Get the broker to be used during password reset.
     */
    public function broker(): PasswordBroker
    {
        return Password::broker();
    }

    public function render(): View|Application|Factory
    {
        return view('livewire.auth.passwords.email');
    }
}
