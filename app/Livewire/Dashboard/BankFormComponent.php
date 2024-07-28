<?php

namespace App\Livewire\Dashboard;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Attributes\On;
use Livewire\Attributes\{Validate};
use Livewire\Component;

class BankFormComponent extends Component
{
    /** @var array<string>  */
    public array $types;

    #[Validate('required')]
    public string $account_type;

    #[Validate('required|numeric|decimal:2')]
    public string $amount;

    #[Validate('required')]
    public string $name;

    public function mount($types = []): void
    {
        $this->types = array_map(fn ($type) => ['label' => $type['name'], 'value' => $type['id']], $types);
    }

    public function resetForm(): void
    {
        $this->reset(['name', 'amount', 'account_type']);
    }

    #[On('handle-on-change')]
    public function updateAccountType(int $account_type): void
    {
        $this->account_type = $account_type;
        $this->validateOnly('account_type');
    }

    public function save(): void
    {
        $this->validate();

//        $modelName = !$this->template ? 'Bank' : 'BankTemplate';
//        $model = "App\\Models\\{$modelName}";
//        $class = new $model();
//
//        $class->create([
//            'name' => $this->name,
//            'amount' =>
//        ]);

//        \Debugbar::info($model);

        $this->dispatch('close-modal');
        $this->resetForm();
    }

    public function render(): View|Application|Factory
    {
        return view('livewire.dashboard.bank-form-component');
    }
}
