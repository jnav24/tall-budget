<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Register extends Component
{
    #[Rule('required')]
    public string $first_name = '';

    #[Rule('required')]
    public string $last_name = '';

    #[Rule('required|email|unique:users')]
    public string $email = '';

    #[Rule('required|same:passwordConfirmation')]
    public string $password = '';

    #[Rule('required')]
    public string $passwordConfirmation = '';

    public function register(): \Illuminate\Http\RedirectResponse
    {
        $this->validate();

        $user = User::create([
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended(route('home'));
    }

    public function render(): View|Application|Factory
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
