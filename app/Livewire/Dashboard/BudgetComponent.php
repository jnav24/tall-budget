<?php

namespace App\Livewire\Dashboard;

use App\Models\Budget;
use App\Models\BudgetAggregation;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.dashboard')]
class BudgetComponent extends Component
{
    public Collection $aggregations;
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
                        'saved' => $budget->aggregations?->shift()?->value ?? 0,
                    ]
                );
            });

        $this->aggregations = BudgetAggregation::query()
            ->select(DB::raw('YEAR(created_at) as year'))
            ->groupBy('year')
            ->orderByDesc('year')
            ->get()
            ->pluck('year');
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
