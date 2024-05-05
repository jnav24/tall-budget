<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Bank
 *
 * @property int $id
 * @property string $name
 * @property string $amount
 * @property int $bank_type_id
 * @property int $budget_id
 * @property int $budget_template_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\BankType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Bank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereBankTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bank whereUpdatedAt($value)
 */
	class Bank extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BankTemplate
 *
 * @property int $id
 * @property string $name
 * @property string $amount
 * @property int $bank_type_id
 * @property int $budget_template_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BankTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|BankTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankTemplate whereBankTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankTemplate whereUpdatedAt($value)
 */
	class BankTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BankType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BankType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BankType query()
 * @method static \Illuminate\Database\Eloquent\Builder|BankType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BankType whereUpdatedAt($value)
 */
	class BankType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BillType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $save_type
 * @property string $model
 * @method static \Illuminate\Database\Eloquent\Builder|BillType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BillType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BillType query()
 * @method static \Illuminate\Database\Eloquent\Builder|BillType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillType whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillType whereSaveType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BillType whereUpdatedAt($value)
 */
	class BillType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Budget
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $budget_cycle
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BudgetAggregation> $aggregations
 * @property-read int|null $aggregations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Bank> $banks
 * @property-read int|null $banks_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Childcare> $childcare
 * @property-read int|null $childcare_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CreditCard> $credit_cards
 * @property-read int|null $credit_cards_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Education> $education
 * @property-read int|null $education_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Entertainment> $entertainment
 * @property-read int|null $entertainment_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Food> $food
 * @property-read int|null $food_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Gift> $gift
 * @property-read int|null $gift_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Housing> $housing
 * @property-read int|null $housing_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Income> $incomes
 * @property-read int|null $incomes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Investment> $investments
 * @property-read int|null $investments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Loan> $loan
 * @property-read int|null $loan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Medical> $medical
 * @property-read int|null $medical_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Miscellaneous> $miscellaneous
 * @property-read int|null $miscellaneous_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Personal> $personal
 * @property-read int|null $personal_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Shopping> $shopping
 * @property-read int|null $shopping_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Subscription> $subscription
 * @property-read int|null $subscription_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Tax> $tax
 * @property-read int|null $tax_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Travel> $travel
 * @property-read int|null $travel_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Utility> $utilities
 * @property-read int|null $utilities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Vehicle> $vehicles
 * @property-read int|null $vehicles_count
 * @method static \Illuminate\Database\Eloquent\Builder|Budget newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Budget newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Budget query()
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereBudgetCycle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Budget withAggregations()
 * @method static \Illuminate\Database\Eloquent\Builder|Budget withExpenses()
 */
	class Budget extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BudgetAggregation
 *
 * @property int $id
 * @property int $user_id
 * @property int $budget_id
 * @property string $type
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetAggregation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetAggregation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetAggregation query()
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetAggregation whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetAggregation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetAggregation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetAggregation whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetAggregation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetAggregation whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetAggregation whereValue($value)
 */
	class BudgetAggregation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BudgetTemplate
 *
 * @property int $id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BankTemplate> $banks
 * @property-read int|null $banks_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ChildcareTemplate> $childcare
 * @property-read int|null $childcare_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CreditCardTemplate> $credit_cards
 * @property-read int|null $credit_cards_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\EducationTemplate> $education
 * @property-read int|null $education_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\EntertainmentTemplate> $entertainment
 * @property-read int|null $entertainment_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\FoodTemplate> $food
 * @property-read int|null $food_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GiftTemplate> $gift
 * @property-read int|null $gift_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\HousingTemplate> $housing
 * @property-read int|null $housing_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\IncomeTemplate> $incomes
 * @property-read int|null $incomes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\InvestmentTemplate> $investments
 * @property-read int|null $investments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LoanTemplate> $loan
 * @property-read int|null $loan_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MedicalTemplate> $medical
 * @property-read int|null $medical_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\MiscellaneousTemplate> $miscellaneous
 * @property-read int|null $miscellaneous_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\PersonalTemplate> $personal
 * @property-read int|null $personal_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ShoppingTemplate> $shopping
 * @property-read int|null $shopping_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SubscriptionTemplate> $subscription
 * @property-read int|null $subscription_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TaxTemplate> $tax
 * @property-read int|null $tax_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TravelTemplate> $travel
 * @property-read int|null $travel_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UtilityTemplate> $utilities
 * @property-read int|null $utilities_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\VehicleTemplate> $vehicles
 * @property-read int|null $vehicles_count
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetTemplate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BudgetTemplate whereUserId($value)
 */
	class BudgetTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Childcare
 *
 * @property int $id
 * @property int $budget_id
 * @property int $childcare_type_id
 * @property string $name
 * @property string $amount
 * @property string|null $confirmation
 * @property int $not_track_amount
 * @property int $due_date
 * @property string|null $paid_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @property-read \App\Models\ChildcareType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare query()
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare whereChildcareTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Childcare whereUpdatedAt($value)
 */
	class Childcare extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChildcareTemplate
 *
 * @property int $id
 * @property int $budget_template_id
 * @property int $childcare_type_id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareTemplate whereChildcareTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareTemplate whereUpdatedAt($value)
 */
	class ChildcareTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChildcareType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChildcareType whereUpdatedAt($value)
 */
	class ChildcareType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CreditCard
 *
 * @property int $id
 * @property string $name
 * @property string $limit
 * @property string|null $last_4
 * @property string $exp_month
 * @property string $exp_year
 * @property string $apr
 * @property int $due_date
 * @property int $budget_id
 * @property int $credit_card_type_id
 * @property string|null $paid_date
 * @property string|null $confirmation
 * @property string $amount
 * @property string $balance
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @property-read \App\Models\CreditCardType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard query()
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereApr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereCreditCardTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereExpMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereExpYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereLast4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereUpdatedAt($value)
 */
	class CreditCard extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CreditCardTemplate
 *
 * @property int $id
 * @property string $name
 * @property int $limit
 * @property string|null $last_4
 * @property string $exp_month
 * @property string $exp_year
 * @property string $apr
 * @property int $due_date
 * @property int $budget_template_id
 * @property int $credit_card_type_id
 * @property string $amount
 * @property string $balance
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate whereApr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate whereCreditCardTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate whereExpMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate whereExpYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate whereLast4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate whereLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardTemplate whereUpdatedAt($value)
 */
	class CreditCardTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CreditCardType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardType query()
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCardType whereUpdatedAt($value)
 */
	class CreditCardType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Education
 *
 * @property int $id
 * @property int $budget_id
 * @property int $education_type_id
 * @property string $name
 * @property string $amount
 * @property string|null $confirmation
 * @property int $not_track_amount
 * @property int $due_date
 * @property string|null $paid_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @property-read \App\Models\EducationType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Education newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Education newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Education query()
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereEducationTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereUpdatedAt($value)
 */
	class Education extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EducationTemplate
 *
 * @property int $id
 * @property int $budget_template_id
 * @property int $education_type_id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EducationTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationTemplate whereEducationTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationTemplate whereUpdatedAt($value)
 */
	class EducationTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EducationType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType query()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType whereUpdatedAt($value)
 */
	class EducationType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Entertainment
 *
 * @property int $id
 * @property int $budget_id
 * @property int $entertainment_type_id
 * @property string $name
 * @property string $amount
 * @property string|null $confirmation
 * @property int $not_track_amount
 * @property int $due_date
 * @property string|null $paid_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @property-read \App\Models\EntertainmentType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment whereEntertainmentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Entertainment whereUpdatedAt($value)
 */
	class Entertainment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EntertainmentTemplate
 *
 * @property int $id
 * @property int $budget_template_id
 * @property int $entertainment_type_id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentTemplate whereEntertainmentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentTemplate whereUpdatedAt($value)
 */
	class EntertainmentTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EntertainmentType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentType query()
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EntertainmentType whereUpdatedAt($value)
 */
	class EntertainmentType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Food
 *
 * @property int $id
 * @property int $budget_id
 * @property int $food_type_id
 * @property string $name
 * @property string $amount
 * @property string|null $confirmation
 * @property int $not_track_amount
 * @property int $due_date
 * @property string|null $paid_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @property-read \App\Models\FoodType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Food newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Food newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Food query()
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereFoodTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Food whereUpdatedAt($value)
 */
	class Food extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FoodTemplate
 *
 * @property int $id
 * @property int $budget_template_id
 * @property int $food_type_id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FoodTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodTemplate whereFoodTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodTemplate whereUpdatedAt($value)
 */
	class FoodTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FoodType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FoodType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodType query()
 * @method static \Illuminate\Database\Eloquent\Builder|FoodType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FoodType whereUpdatedAt($value)
 */
	class FoodType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gift
 *
 * @property int $id
 * @property int $budget_id
 * @property int $gift_type_id
 * @property string $name
 * @property string $amount
 * @property string|null $confirmation
 * @property int $not_track_amount
 * @property int $due_date
 * @property string|null $paid_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @property-read \App\Models\GiftType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Gift newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gift newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gift query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereGiftTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereUpdatedAt($value)
 */
	class Gift extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GiftTemplate
 *
 * @property int $id
 * @property int $budget_template_id
 * @property int $gift_type_id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GiftTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftTemplate whereGiftTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftTemplate whereUpdatedAt($value)
 */
	class GiftTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GiftType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GiftType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftType query()
 * @method static \Illuminate\Database\Eloquent\Builder|GiftType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GiftType whereUpdatedAt($value)
 */
	class GiftType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Housing
 *
 * @property int $id
 * @property int $budget_id
 * @property int $housing_type_id
 * @property string $name
 * @property string $amount
 * @property string|null $confirmation
 * @property int $not_track_amount
 * @property int $due_date
 * @property string|null $paid_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @property-read \App\Models\HousingType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Housing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Housing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Housing query()
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereHousingTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereUpdatedAt($value)
 */
	class Housing extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HousingTemplate
 *
 * @property int $id
 * @property int $budget_template_id
 * @property int $housing_type_id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HousingTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingTemplate whereHousingTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingTemplate whereUpdatedAt($value)
 */
	class HousingTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HousingType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HousingType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingType query()
 * @method static \Illuminate\Database\Eloquent\Builder|HousingType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HousingType whereUpdatedAt($value)
 */
	class HousingType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Income
 *
 * @property int $id
 * @property string $name
 * @property string $amount
 * @property int $budget_id
 * @property int $income_type_id
 * @property string $initial_pay_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\IncomeType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Income newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Income newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Income query()
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereIncomeTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereInitialPayDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Income whereUpdatedAt($value)
 */
	class Income extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IncomeTemplate
 *
 * @property int $id
 * @property string $name
 * @property string $amount
 * @property int $budget_template_id
 * @property int $income_type_id
 * @property string $initial_pay_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeTemplate whereIncomeTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeTemplate whereInitialPayDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeTemplate whereUpdatedAt($value)
 */
	class IncomeTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IncomeType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeType query()
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IncomeType whereUpdatedAt($value)
 */
	class IncomeType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Investment
 *
 * @property int $id
 * @property string $name
 * @property string $amount
 * @property int $budget_id
 * @property int $investment_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\InvestmentType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Investment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Investment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Investment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Investment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Investment whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Investment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Investment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Investment whereInvestmentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Investment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Investment whereUpdatedAt($value)
 */
	class Investment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\InvestmentTemplate
 *
 * @property int $id
 * @property string $name
 * @property string $amount
 * @property int $budget_template_id
 * @property int $investment_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentTemplate whereInvestmentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentTemplate whereUpdatedAt($value)
 */
	class InvestmentTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\InvestmentType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentType query()
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|InvestmentType whereUpdatedAt($value)
 */
	class InvestmentType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Loan
 *
 * @property int $id
 * @property int $budget_id
 * @property int $loan_type_id
 * @property string $name
 * @property string $amount
 * @property string|null $confirmation
 * @property int $not_track_amount
 * @property int $due_date
 * @property string|null $paid_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @property-read \App\Models\LoanType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Loan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Loan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Loan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereLoanTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Loan whereUpdatedAt($value)
 */
	class Loan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LoanTemplate
 *
 * @property int $id
 * @property int $budget_template_id
 * @property int $loan_type_id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LoanTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoanTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoanTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|LoanTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoanTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoanTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoanTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoanTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoanTemplate whereLoanTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoanTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoanTemplate whereUpdatedAt($value)
 */
	class LoanTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LoanType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LoanType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoanType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LoanType query()
 * @method static \Illuminate\Database\Eloquent\Builder|LoanType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoanType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoanType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoanType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LoanType whereUpdatedAt($value)
 */
	class LoanType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Medical
 *
 * @property int $id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property int $budget_id
 * @property int $medical_type_id
 * @property string|null $paid_date
 * @property string|null $confirmation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $not_track_amount
 * @property string|null $notes
 * @property-read \App\Models\MedicalType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Medical newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medical newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medical query()
 * @method static \Illuminate\Database\Eloquent\Builder|Medical whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medical whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medical whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medical whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medical whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medical whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medical whereMedicalTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medical whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medical whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medical whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medical wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medical whereUpdatedAt($value)
 */
	class Medical extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MedicalTemplate
 *
 * @property int $id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property int $budget_template_id
 * @property int $medical_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalTemplate whereMedicalTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalTemplate whereUpdatedAt($value)
 */
	class MedicalTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MedicalType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalType query()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalType whereUpdatedAt($value)
 */
	class MedicalType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Miscellaneous
 *
 * @property int $id
 * @property int $budget_id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property string|null $paid_date
 * @property string|null $confirmation
 * @property int $not_track_amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous query()
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Miscellaneous whereUpdatedAt($value)
 */
	class Miscellaneous extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MiscellaneousTemplate
 *
 * @property int $id
 * @property int $budget_template_id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $not_track_amount
 * @method static \Illuminate\Database\Eloquent\Builder|MiscellaneousTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MiscellaneousTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MiscellaneousTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|MiscellaneousTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MiscellaneousTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MiscellaneousTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MiscellaneousTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MiscellaneousTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MiscellaneousTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MiscellaneousTemplate whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MiscellaneousTemplate whereUpdatedAt($value)
 */
	class MiscellaneousTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Personal
 *
 * @property int $id
 * @property int $budget_id
 * @property int $personal_type_id
 * @property string $name
 * @property string $amount
 * @property string|null $confirmation
 * @property int $not_track_amount
 * @property int $due_date
 * @property string|null $paid_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @property-read \App\Models\PersonalType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Personal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Personal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Personal query()
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal wherePersonalTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personal whereUpdatedAt($value)
 */
	class Personal extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PersonalTemplate
 *
 * @property int $id
 * @property int $budget_template_id
 * @property int $personal_type_id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalTemplate wherePersonalTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalTemplate whereUpdatedAt($value)
 */
	class PersonalTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PersonalType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalType query()
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PersonalType whereUpdatedAt($value)
 */
	class PersonalType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Shopping
 *
 * @property int $id
 * @property int $budget_id
 * @property int $shopping_type_id
 * @property string $name
 * @property string $amount
 * @property string|null $confirmation
 * @property int $not_track_amount
 * @property int $due_date
 * @property string|null $paid_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @property-read \App\Models\ShoppingType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping whereShoppingTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shopping whereUpdatedAt($value)
 */
	class Shopping extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ShoppingTemplate
 *
 * @property int $id
 * @property int $budget_template_id
 * @property int $shopping_type_id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingTemplate whereShoppingTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingTemplate whereUpdatedAt($value)
 */
	class ShoppingTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ShoppingType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShoppingType whereUpdatedAt($value)
 */
	class ShoppingType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subscription
 *
 * @property int $id
 * @property int $budget_id
 * @property int $subscription_type_id
 * @property string $name
 * @property string $amount
 * @property string|null $confirmation
 * @property int $not_track_amount
 * @property int $due_date
 * @property string|null $paid_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @property-read \App\Models\SubscriptionType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereSubscriptionTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscription whereUpdatedAt($value)
 */
	class Subscription extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SubscriptionTemplate
 *
 * @property int $id
 * @property int $budget_template_id
 * @property int $subscription_type_id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionTemplate whereSubscriptionTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionTemplate whereUpdatedAt($value)
 */
	class SubscriptionTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SubscriptionType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionType query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubscriptionType whereUpdatedAt($value)
 */
	class SubscriptionType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tax
 *
 * @property int $id
 * @property int $budget_id
 * @property int $tax_type_id
 * @property string $name
 * @property string $amount
 * @property string|null $confirmation
 * @property int $not_track_amount
 * @property int $due_date
 * @property string|null $paid_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @property-read \App\Models\TaxType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Tax newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereTaxTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tax whereUpdatedAt($value)
 */
	class Tax extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TaxTemplate
 *
 * @property int $id
 * @property int $budget_template_id
 * @property int $tax_type_id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TaxTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxTemplate whereTaxTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxTemplate whereUpdatedAt($value)
 */
	class TaxTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TaxType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType query()
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TaxType whereUpdatedAt($value)
 */
	class TaxType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Travel
 *
 * @property int $id
 * @property int $budget_id
 * @property int $travel_type_id
 * @property string $name
 * @property string $amount
 * @property string|null $confirmation
 * @property int $not_track_amount
 * @property int $due_date
 * @property string|null $paid_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @property-read \App\Models\TravelType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Travel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Travel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Travel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Travel whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Travel whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Travel whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Travel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Travel whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Travel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Travel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Travel whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Travel whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Travel wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Travel whereTravelTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Travel whereUpdatedAt($value)
 */
	class Travel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TravelTemplate
 *
 * @property int $id
 * @property int $budget_template_id
 * @property int $travel_type_id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TravelTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TravelTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TravelTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|TravelTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TravelTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TravelTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TravelTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TravelTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TravelTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TravelTemplate whereTravelTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TravelTemplate whereUpdatedAt($value)
 */
	class TravelTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TravelType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TravelType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TravelType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TravelType query()
 * @method static \Illuminate\Database\Eloquent\Builder|TravelType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TravelType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TravelType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TravelType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TravelType whereUpdatedAt($value)
 */
	class TravelType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $email
 * @property mixed $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserDevice> $devices
 * @property-read int|null $devices_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\UserProfile|null $profile
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserVehicle> $vehicles
 * @property-read int|null $vehicles_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserDevice
 *
 * @property int $id
 * @property int $user_id
 * @property string $ip
 * @property string $agent
 * @property string $verify_secret
 * @property string $verify_token
 * @property string|null $verified_at
 * @property string|null $expires_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserDevice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDevice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDevice query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDevice whereAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDevice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDevice whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDevice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDevice whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDevice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDevice whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDevice whereVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDevice whereVerifySecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDevice whereVerifyToken($value)
 */
	class UserDevice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserProfile
 *
 * @property int $id
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $full_name
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\UserProfileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile whereUserId($value)
 */
	class UserProfile extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserVehicle
 *
 * @property int $id
 * @property int $user_id
 * @property string $make
 * @property string $model
 * @property string $year
 * @property string $color
 * @property string $license
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle whereLicense($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle whereMake($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle whereYear($value)
 */
	class UserVehicle extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Utility
 *
 * @property int $id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property int $budget_id
 * @property int $utility_type_id
 * @property string|null $paid_date
 * @property string|null $confirmation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $notes
 * @property-read \App\Models\UtilityType|null $type
 * @method static \Illuminate\Database\Eloquent\Builder|Utility newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Utility newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Utility query()
 * @method static \Illuminate\Database\Eloquent\Builder|Utility whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Utility whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Utility whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Utility whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Utility whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Utility whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Utility whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Utility whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Utility wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Utility whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Utility whereUtilityTypeId($value)
 */
	class Utility extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UtilityTemplate
 *
 * @property int $id
 * @property string $name
 * @property string $amount
 * @property int $due_date
 * @property int $budget_template_id
 * @property int $utility_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityTemplate whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityTemplate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityTemplate whereUtilityTypeId($value)
 */
	class UtilityTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UtilityType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityType query()
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UtilityType whereUpdatedAt($value)
 */
	class UtilityType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Vehicle
 *
 * @property int $id
 * @property string|null $mileage
 * @property string $amount
 * @property int $due_date
 * @property int $budget_id
 * @property int $user_vehicle_id
 * @property int $vehicle_type_id
 * @property string|null $paid_date
 * @property string|null $confirmation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $not_track_amount
 * @property string $balance
 * @property string|null $notes
 * @property-read \App\Models\VehicleType|null $type
 * @property-read \App\Models\UserVehicle|null $userVehicle
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereBudgetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereConfirmation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereMileage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereNotTrackAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle wherePaidDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereUserVehicleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicle whereVehicleTypeId($value)
 */
	class Vehicle extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VehicleTemplate
 *
 * @property int $id
 * @property string|null $mileage
 * @property string $amount
 * @property int $due_date
 * @property int $budget_template_id
 * @property int $user_vehicle_id
 * @property int $vehicle_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $balance
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleTemplate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleTemplate whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleTemplate whereBudgetTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleTemplate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleTemplate whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleTemplate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleTemplate whereMileage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleTemplate whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleTemplate whereUserVehicleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleTemplate whereVehicleTypeId($value)
 */
	class VehicleTemplate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VehicleType
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType query()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereUpdatedAt($value)
 */
	class VehicleType extends \Eloquent {}
}

