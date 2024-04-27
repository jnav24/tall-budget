<?php

namespace App\Livewire\Dashboard;

use App\Models\Budget;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.dashboard', ['hasTopPadding' => false])]
class BudgetEditComponent extends Component
{
    public ?Budget $budget = null;
    public int $totalBanked = 0;
    public int $totalEarned = 0;
    public int $totalSpent = 0;

    public function mount(int $id): void
    {
        $budget = Budget::query()
            ->where('user_id', auth()->user()->id)
            ->where('id', $id)
//            ->with(['aggregations', fn ($query) => $query->where('type', 'saved')])
//            ->withExpenses()
            ->first();
        dump($budget);
    }

    #[Computed]
    public function totalSaved(): int
    {
        return $this->totalEarned - $this->totalSpent;
    }

    #[Computed]
    public function isGain(): bool
    {
        return $this->totalSaved() >= 0;
    }

    public function saveBudget()
    {
        // do something
    }

    public function render(): View|Application|Factory
    {
        return view('livewire.dashboard.budget-edit');
    }
}
