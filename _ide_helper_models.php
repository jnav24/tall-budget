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
 * @mixin \Eloquent
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
 * @mixin \Eloquent
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
 * App\Models\User
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $two_factor_secret
 * @property string $two_factor_recovery_codes
 * @property string $remember_token
 * @property DateTime $email_verified_at
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserDevice[] $devices
 * @property-read int|null $devices_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\UserProfile|null $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserVehicle[] $vehicles
 * @property-read int|null $vehicles_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @mixin \Eloquent
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
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
 * @mixin Eloquent
 * @phpstan-consistent-constructor 
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
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserProfile query()
 * @mixin \Eloquent
 * @property-read mixed $full_name
 * @method static \Database\Factories\UserProfileFactory factory($count = null, $state = [])
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
 * @property string|null $license
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle query()
 * @mixin \Eloquent
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

