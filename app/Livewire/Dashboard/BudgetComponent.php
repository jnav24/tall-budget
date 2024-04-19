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
use Livewire\Component;

#[Layout('layouts.dashboard')]
class BudgetComponent extends Component
{
    public Collection $allYears;
    public Collection $budgets;
    public string $selectedYear = '';

    public function mount()
    {
        $this->budgets = Budget::query()
            ->withAggregations()
            ->where('user_id', auth()->user()->id)
            ->orderBy('id', 'desc')
            ->get()
            ->map(function ($budget) {
                return collect(
                    [
                        'id' => $budget->id,
                        'name' => $budget->name,
                        'budget_cycle' => $budget->budget_cycle,
                        'saved' => '$' . number_format($budget->aggregations?->shift()?->value ?? 0, 2),
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

    public function render(): View|Application|Factory
    {
        return view('livewire.dashboard.budget');
    }
}
