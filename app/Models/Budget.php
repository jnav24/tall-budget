<?php

namespace App\Models;

use App\Traits\WithExpenses;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Budget extends Model
{
    use HasFactory, WithExpenses;

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

    /**
     * Banks
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function banks(): HasMany
    {
        return $this->hasMany(Bank::class, 'budget_id', 'id');
    }

    /**
     * Childcare
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childcare(): HasMany
    {
        return $this->hasMany(Childcare::class, 'budget_id', 'id');
    }

    /**
     * Credit Card
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function credit_cards(): HasMany
    {
        return $this->hasMany(CreditCard::class, 'budget_id', 'id');
    }

    /**
     * Education
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function education(): HasMany
    {
        return $this->hasMany(Education::class, 'budget_id', 'id');
    }

    /**
     * Entertainment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entertainment(): HasMany
    {
        return $this->hasMany(Entertainment::class, 'budget_id', 'id');
    }

    /**
     * Food
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function food(): HasMany
    {
        return $this->hasMany(Food::class, 'budget_id', 'id');
    }

    /**
     * Gift
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gift(): HasMany
    {
        return $this->hasMany(Gift::class, 'budget_id', 'id');
    }

    /**
     * Housing
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function housing(): HasMany
    {
        return $this->hasMany(Housing::class, 'budget_id', 'id');
    }

    /**
     * Investments
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function investments(): HasMany
    {
        return $this->hasMany(Investment::class, 'budget_id', 'id');
    }

    /**
     * Jobs
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incomes(): HasMany
    {
        return $this->hasMany(Income::class, 'budget_id', 'id');
    }

    /**
     * Loan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function loan(): HasMany
    {
        return $this->hasMany(Loan::class, 'budget_id', 'id');
    }

    /**
     * Personal
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personal(): HasMany
    {
        return $this->hasMany(Personal::class, 'budget_id', 'id');
    }

    /**
     * Shopping
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shopping(): HasMany
    {
        return $this->hasMany(Shopping::class, 'budget_id', 'id');
    }

    /**
     * Subscription
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscription(): HasMany
    {
        return $this->hasMany(Subscription::class, 'budget_id', 'id');
    }

    /**
     * Tax
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tax(): HasMany
    {
        return $this->hasMany(Tax::class, 'budget_id', 'id');
    }

    /**
     * Travel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function travel(): HasMany
    {
        return $this->hasMany(Travel::class, 'budget_id', 'id');
    }

    /**
     * Medical
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medical(): HasMany
    {
        return $this->hasMany(Medical::class, 'budget_id', 'id');
    }

    /**
     * Miscellaneous
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function miscellaneous(): HasMany
    {
        return $this->hasMany(Miscellaneous::class, 'budget_id', 'id');
    }

    /**
     * Utilities
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function utilities(): HasMany
    {
        return $this->hasMany(Utility::class, 'budget_id', 'id');
    }

    /**
     * Vehicles
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class, 'budget_id', 'id');
    }
}
