<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HousingType extends Model
{
    use HasFactory;

    protected $table = 'housing_types';

    protected $hidden= [
        'created_at',
        'updated_at',
    ];
}
