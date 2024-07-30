<?php

namespace App\Livewire\Dashboard;

use App\Models\BillType;
use App\Models\BudgetTemplate;
use App\Traits\ExpenseTypes;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Support\Collection;

#[Layout('layouts.dashboard')]
class BudgetTemplateComponent extends Component
{
    use ExpenseTypes;

    /** @var Collection<BillType>  */
    public Collection $billTypes;

    public ?BudgetTemplate $budgetTemplate;

    public ?int $id;

    public string $selectedItem = 'banks';

    /** @var array  */
    public array $expenseTypes = [];

    public function mount(): void
    {
        $this->billTypes = Cache::remember('bill_types', now()->addMinutes(60), function () {
                return BillType::query()
                    ->orderBy('name')
                    ->get();
            })
            ->map(fn (BillType $type) => ['label' => $type->name, 'value' => Str::snake(Str::camel($type->slug))]);

        $this->budgetTemplate = BudgetTemplate::query()
            ->where('user_id', auth()->user()->id)
            ->withExpenses()
            ->first();

        $this->expenseTypes = $this->getAllExpenseTypes();
    }

    #[On('save-template')]
    public function saveTemplate(): void
    {
        $template = BudgetTemplate::query()
            ->firstOrCreate(['user_id' => auth()->user()->id]);
        $types = Cache::get('bill_types');
        $this->id = null;
        dd($types);
    }

    public function setSelectedExpense(?int $id = null): void
    {
         $this->id = $id;
        // dump($id); // @note it does not go here from the component
    }

    #[On('set-selected-item')]
    public function setSelectedSidebar(string $value): void
    {
        $this->selectedItem = $value;
    }

    public function render(): View|Application|Factory
    {
        return view('livewire.dashboard.budget-template-component');
    }
}
