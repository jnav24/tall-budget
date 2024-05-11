<?php

namespace App\Models;

use App\Traits\WithExpenses;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BudgetTemplate extends Model
{
    use HasFactory, WithExpenses;

    protected $fillable = ['user_id'];

    protected $hidden = ['created_at', 'updated_at'];

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'budget_templates';

    /**
     * Bank Template
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function banks(): HasMany
    {
        return $this->hasMany(BankTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Childcare
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childcare(): HasMany
    {
        return $this->hasMany(ChildcareTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Credit Card Template
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function credit_cards(): HasMany
    {
        return $this->hasMany(CreditCardTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Education
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function education(): HasMany
    {
        return $this->hasMany(EducationTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Entertainment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entertainment(): HasMany
    {
        return $this->hasMany(EntertainmentTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Food
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function food(): HasMany
    {
        return $this->hasMany(FoodTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Gift
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gift(): HasMany
    {
        return $this->hasMany(GiftTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Housing
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function housing(): HasMany
    {
        return $this->hasMany(HousingTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Investment Template
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function investments(): HasMany
    {
        return $this->hasMany(InvestmentTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Jobs
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function incomes(): HasMany
    {
        return $this->hasMany(IncomeTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Loan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function loan(): HasMany
    {
        return $this->hasMany(LoanTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Personal
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personal(): HasMany
    {
        return $this->hasMany(PersonalTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Shopping
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shopping(): HasMany
    {
        return $this->hasMany(ShoppingTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Subscription
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscription(): HasMany
    {
        return $this->hasMany(SubscriptionTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Tax
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tax(): HasMany
    {
        return $this->hasMany(TaxTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Travel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function travel(): HasMany
    {
        return $this->hasMany(TravelTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Medical Template
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medical(): HasMany
    {
        return $this->hasMany(MedicalTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Miscellaneous Template
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function miscellaneous(): HasMany
    {
        return $this->hasMany(MiscellaneousTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Utilities Template
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function utilities(): HasMany
    {
        return $this->hasMany(UtilityTemplate::class, 'budget_template_id', 'id');
    }

    /**
     * Vehicles Template
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehicles(): HasMany
    {
        return $this->hasMany(VehicleTemplate::class, 'budget_template_id', 'id');
    }
}
