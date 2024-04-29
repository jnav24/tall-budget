<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildcareType extends Model
{
    use HasFactory;

    protected $table = 'childcare_types';

    protected $hidden= [
        'created_at',
        'updated_at',
    ];
}
