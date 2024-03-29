<?php

namespace App\Livewire\Auth;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportRedirects\Redirector;

#[Layout('layouts.auth')]
class Login extends Component
{
    public string $some_stuff_input = '';

    #[Rule('required|email')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';

    #[Rule('bool')]
    public bool $remember = false;

    public function authenticate(): \Illuminate\Http\RedirectResponse|bool|Redirector
    {
        $this->validate();

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));

            return false;
        }

        return redirect()->intended(route('dashboard.home'));
    }

    public function render(): View|Application|Factory
    {
        return view('livewire.auth.login');
    }
}
