<?php

namespace App\Livewire\Dashboard;

use App\Models\Budget;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.dashboard')]
class BudgetComponent extends Component
{
    public Collection $allYears;
    public Collection $budgets;
    public string $selectedYear = '';
    public bool $isSubmit = false;

    public function mount()
    {
        $this->budgets = Budget::query()
            ->withAggregations()
            ->where('user_id', auth()->user()->id)
            ->orderBy('id', 'desc')
            ->get()
            ->map(function ($budget) {
                $savedAmount = $budget->aggregations?->shift()?->value ?? 0;
                return collect(
                    [
                        'id' => $budget->id,
                        'name' => $budget->name,
                        'budget_cycle' => $budget->budget_cycle,
                        'saved_dollar' => '$' . number_format($savedAmount, 2),
                        'saved' => $savedAmount,
                    ]
                );
            })
            ->groupBy(
                fn ($item) => Carbon::parse($item['budget_cycle'])->format('Y')
            );

        $this->allYears = $this->budgets->keys();
    }

    #[Computed]
    public function years(): void
    {
        // @todo get aggregations

        // @todo add `&& $this->aggregations->count()` to conditional
        if ($this->selectedYear === '') {
            $this->selectedYear = '2024';
        }

        // @todo return aggregations
    }

    #[On('add-new-budget')]
    public function addNewBudget(): void
    {
//        $this->isSubmit = true;
//        $this->dispatch('close-modal');
    }

    public function render(): View|Application|Factory
    {
        return view('livewire.dashboard.budget');
    }
}
