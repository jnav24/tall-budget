<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vehicle extends Model
{
    use HasFactory;

    /**
     * Default Attributes
     *
     * @var array
     */
    protected $attributes = [
        'mileage' => null,
        'amount' => null,
        'due_date' => null,
        'user_vehicle_id' => null,
        'vehicle_type_id' => null,
        'paid_date' => null,
        'confirmation' => null,
        'not_track_amount' => null,
        'balance' => null,
        'budget_id' => null,
        'notes' => null,
    ];

    /**
     * Mass assignment
     *
     * @var array
     */
    protected $fillable = [
        'mileage',
        'amount',
        'due_date',
        'user_vehicle_id',
        'vehicle_type_id',
        'paid_date',
        'confirmation',
        'not_track_amount',
        'balance',
        'budget_id',
        'notes',
    ];

    /**
     * Hide columns
     *
     * @var array
     */
    protected $hidden = [
        'budget_id',
        'created_at',
        'updated_at',
    ];

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'vehicles';

    /**
     * @return HasOne
     */
    public function type(): HasOne
    {
        return $this->hasOne(VehicleType::class, 'id', 'vehicle_type_id');
    }

    /**
     * @return HasOne
     */
    public function userVehicle(): HasOne
    {
        return $this->hasOne(UserVehicle::class, 'id', 'user_vehicle_id');
    }
}
