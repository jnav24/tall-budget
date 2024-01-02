<?php

namespace App\Livewire\Auth\Passwords;

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Email extends Component
{
    #[Rule('required|email')]
    public string $email;

    /** @var string|null|bool */
    public $emailSentMessage = false;

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
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        return Password::broker();
    }

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.auth.passwords.email')->extends('layouts.auth');
    }
}
