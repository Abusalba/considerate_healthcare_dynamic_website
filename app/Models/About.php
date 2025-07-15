<?php

namespace App\Models;

use App\Traits\DatetimeTraits;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use DatetimeTraits;
    protected $fillable = [
        'title',
        'description',
        'image',
        'image2',
        'status', // active, inactive, draft
    ];

    public function getImageAttribute($value)
    {
        return ucfirst($value);
    }



}
