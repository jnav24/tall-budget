<?php

namespace App\Livewire\Auth;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class Verify extends Component
{
    public function resend(): void
    {
        if (Auth::user()) {
            if (Auth::user()->hasVerifiedEmail()) {
                redirect(route('home'));
            }

            Auth::user()->sendEmailVerificationNotification();

            $this->dispatch('resent');

            session()->flash('resent');
        }
    }

    public function render(): View|Application|Factory
    {
        return view('livewire.auth.verify');
    }
}
