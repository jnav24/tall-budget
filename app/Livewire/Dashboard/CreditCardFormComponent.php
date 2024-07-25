<?php

namespace App\Livewire\Dashboard;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class CreditCardFormComponent extends Component
{
    /** @var array<string>  */
    public array $types;

    public function mount($types = []): void
    {
        $this->types = array_map(fn ($type) => ['label' => $type['name'], 'value' => $type['id']], $types);
    }

    public function save(): void
    {
        $this->validate();
    }

    public function render(): View|Application|Factory
    {
        return view('livewire.dashboard.credit-card-form-component');
    }
}
