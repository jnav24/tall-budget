<?php

namespace App\Livewire\Dashboard;

use App\Models\Budget;
use Carbon\{Carbon, CarbonPeriod};
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Collection;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.dashboard')]
class BudgetComponent extends Component
{
    public Collection $allYears;
    public Collection $budgets;
    public int $nextBudget = 1;
    public int $currentYear = 1970;

    /** @var string[] $allMonths */
    public array $allMonths = [];

    public $budgetMonths = [];

    public function mount(): void
    {
        $this->allMonths = $this->getAllMonths();
        $this->currentYear = Carbon::now()->format('Y');

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

        $this->updateBudgetWithCurrentYear();

        $this->allYears = $this->budgets->keys()->map(fn ($year) => ['label' => $year, 'value' => $year]);
        $this->nextBudget = $this->getLatestBudgetMonth();
    }

    #[On('add-new-budget')]
    public function addNewBudget(): void
    {
        // $this->isSubmit = true;
        // $this->dispatch('close-modal');
    }

    public function render(): View|Application|Factory
    {
        return view('livewire.dashboard.budget');
    }

    /**
     * @return array<int, string>
     */
    private function getAllMonths(): array
    {
        $period = CarbonPeriod::create('1970-01-01', '1 month', '1970-12-31');

        $months = [];

        foreach ($period as $idx => $date) {
            $months[] = [
                'label' => $date->format('F'),
                'value' => $idx + 1,
            ];
        }

        return $months;
    }

    private function updateBudgetWithCurrentYear(): void
    {
        if (empty($this->budgets->get($this->currentYear))) {
            $this->budgets = collect([$this->currentYear => []])->union($this->budgets);
        }
    }

    private function getLatestBudgetMonth(): int
    {
        /** @var Collection $currentYearBudgets */
        $currentYearBudgets = $this->budgets->get($this->currentYear);

        if (! empty($currentYearBudgets) && $currentYearBudgets->count()) {
            $month = Carbon::parse($currentYearBudgets->first()['budget_cycle'])->month;

            if ($month < 12) {
                return $month + 1;
            }
        }

        return 1;
    }
}
