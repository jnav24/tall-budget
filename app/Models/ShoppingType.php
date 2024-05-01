<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingType extends Model
{
    use HasFactory;

    protected $table = 'shopping_types';

    protected $hidden= [
        'created_at',
        'updated_at',
    ];
}
