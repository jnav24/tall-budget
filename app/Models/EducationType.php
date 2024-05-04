<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationType extends Model
{
    use HasFactory;

    protected $table = 'education_types';

    protected $hidden= [
        'created_at',
        'updated_at',
    ];
}
