<?php

namespace App\Models;

use App\Traits\WithExpensesTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory, WithExpensesTrait;

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'budget_cycle',
        'user_id',
    ];

    /**
     * Hide columns
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
        'created_at',
        'updated_at',
    ];

    public function scopeWithAggregations($query)
    {
        return $query->with(['aggregations' => fn ($q) => $q->where('type', 'saved')]);
    }

    /**
     * Aggregations
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aggregations()
    {
        return $this->hasMany(BudgetAggregation::class, 'budget_id', 'id');
    }

}
