<?php

namespace App\Models;

use App\Traits\DatetimeTraits;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use DatetimeTraits;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'description',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
