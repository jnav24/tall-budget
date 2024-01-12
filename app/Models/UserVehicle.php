<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserVehicle query()
 *
 * @mixin \Eloquent
 */
class UserVehicle extends Model
{
    /**
     * @var array<string, null>
     */
    protected $attributes = [
        'make' => null,
        'model' => null,
        'year' => null,
        'color' => null,
        'license' => null,
        'active' => null,
        'user_id' => null,
    ];

    /**
     * @var array<int, string>
     */
    protected $fillable = ['make', 'model', 'year', 'color', 'license', 'active', 'user_id'];

    /**
     * @var string
     */
    protected $table = 'user_vehicles';

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * @var array<int, string>
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * @return BelongsTo<User, UserVehicle>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
