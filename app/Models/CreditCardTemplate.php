<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCardTemplate extends Model
{
    use HasFactory;

    /**
     * Default Attributes
     *
     * @var array
     */
    protected $attributes = [
        'name' => null,
        'limit' => null,
        'last_4' => null,
        'exp_month' => null,
        'exp_year' => null,
        'apr' => null,
        'due_date' => null,
        'credit_card_type_id' => null,
        'amount' => null,
        'balance' => null,
        'budget_template_id' => null,
    ];

    /**
     * Mass assignment
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'limit',
        'last_4',
        'exp_month',
        'exp_year',
        'apr',
        'due_date',
        'credit_card_type_id',
        'amount',
        'balance',
        'budget_template_id',
    ];

    /**
     * Hide columns
     *
     * @var array
     */
    protected $hidden = [
        'budget_template_id',
        'created_at',
        'updated_at',
    ];

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'credit_card_templates';
}
