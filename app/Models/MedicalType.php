<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalType extends Model
{
    use HasFactory;

    protected $table = 'medical_types';

    protected $hidden= [
        'created_at',
        'updated_at',
    ];
}
