<?php

namespace App\Livewire\Dashboard;

use App\Models\BillType;
use App\Models\BudgetTemplate;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Collection;

#[Layout('layouts.dashboard')]
class BudgetTemplateComponent extends Component
{
    /** @var Collection<BillType>  */
    public Collection $billTypes;

    public ?BudgetTemplate $budgetTemplate;

    public function mount(): void
    {
        $this->billTypes = BillType::query()
            ->orderBy('name')
            ->get()
            ->map(fn (BillType $type) => ['label' => $type->name, 'value' => Str::camel($type->slug)]);

        $this->budgetTemplate = BudgetTemplate::query()
            ->where('user_id', auth()->user()->id)
            ->withExpenses()
            ->first();
    }

    public function render(): View|Application|Factory
    {
        return view('livewire.dashboard.budget-template-component');
    }
}
