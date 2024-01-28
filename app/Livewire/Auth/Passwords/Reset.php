<?php

namespace App\Livewire\Auth\Passwords;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class Reset extends Component
{
    /** @var string */
    public $token;

    /** @var string */
    public $email;

    /** @var string */
    public $password;

    /** @var string */
    public $passwordConfirmation;

    public function mount(string $token): void
    {
        /** @var string $email */
        $email = request()->query('email', '');
        $this->email = $email;
        $this->token = $token;
    }

    public function resetPassword(): ?RedirectResponse
    {
        $this->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|same:passwordConfirmation',
        ]);

        /** @var string $response */
        $response = $this->broker()->reset(
            [
                'token' => $this->token,
                'email' => $this->email,
                'password' => $this->password,
            ],
            function ($user, $password) {
                $user->password = Hash::make($password);

                $user->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));

                $this->guard()->login($user);
            }
        );

        if ($response == Password::PASSWORD_RESET) {
            session()->flash(trans($response));

            return redirect(route('home'));
        }

        $this->addError('email', trans($response));

        return null;
    }

    /**
     * Get the broker to be used during password reset.
     */
    public function broker(): PasswordBroker
    {
        return Password::broker();
    }

    /**
     * Get the guard to be used during password reset.
     */
    protected function guard(): StatefulGuard
    {
        return Auth::guard();
    }

    public function render(): View|Application|Factory
    {
        return view('livewire.auth.passwords.reset');
    }
}
