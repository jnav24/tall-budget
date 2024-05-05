<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCardType extends Model
{
    use HasFactory;

    protected $table = 'credit_card_types';

    protected $hidden= [
        'created_at',
        'updated_at',
    ];
}
