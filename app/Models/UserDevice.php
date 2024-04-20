<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

class UserDevice extends Model
{
    /**
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * Table Name
     *
     * @var string
     */
    protected $table = 'user_devices';
}
