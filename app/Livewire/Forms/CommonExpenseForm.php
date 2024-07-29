<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CommonExpenseForm extends Form
{
    #[Validate('required')]
    public string $name = '';

    #[Validate('required|decimal:2')]
    public string $amount = '0.00';

    #[Validate('required')]
    public string $type = '';

    #[Validate('string')]
    public string $confirmation = '';

    #[Validate('bool')]
    public bool $calculate = false;

    #[Validate('required|date')]
    public string $paidDate = '';

    #[Validate('string')]
    public string $notes = '';

    public function updateCalculate(): void
    {
        $this->calculate = ! $this->calculate;
    }
}
