<?php

namespace App\Livewire\Dashboard;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.dashboard')]
class Budget extends Component
{
    public array $budgets = [];

    public function render(): View|Application|Factory
    {
        return view('livewire.dashboard.budget');
    }
}
