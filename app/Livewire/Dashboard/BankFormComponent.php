<?php

namespace App\Livewire\Dashboard;

use App\Models\Bank;
use App\Models\BankType;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class BankFormComponent extends Component
{
    /** @var Collection<BankType>|null  */
    public ?Collection $types;

    #[Rule('required')]
    public string $account_type;

    #[Rule('required|numeric|decimal:2')]
    public string $amount;

    #[Rule('required')]
    public string $name;

    #[Rule('required')]
    public bool $template = false;

    public function mount(): void
    {
        $this->types = BankType::all()
            ->map(
                fn ($type) => ['label' => $type->name, 'value' => $type->id]
            );
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
