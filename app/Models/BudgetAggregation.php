<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetAggregation extends Model
{
    use HasFactory;

    /**
     * Mass assignment
     *
     * @var array
     */
    protected $fillable = [
        'budget_id',
        'type',
        'user_id',
        'value',
    ];

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'budget_aggregation';

    /**
     * Hide columns
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
