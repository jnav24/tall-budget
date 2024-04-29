<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtilityType extends Model
{
    use HasFactory;

    protected $table = 'utility_types';

    protected $hidden= [
        'created_at',
        'updated_at',
    ];
}
