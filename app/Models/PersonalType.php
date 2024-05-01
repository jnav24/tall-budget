<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalType extends Model
{
    use HasFactory;

    protected $table = 'personal_types';

    protected $hidden= [
        'created_at',
        'updated_at',
    ];
}
