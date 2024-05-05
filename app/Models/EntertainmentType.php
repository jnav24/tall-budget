<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntertainmentType extends Model
{
    use HasFactory;

    protected $table = 'entertainment_types';

    protected $hidden= [
        'created_at',
        'updated_at',
    ];
}
