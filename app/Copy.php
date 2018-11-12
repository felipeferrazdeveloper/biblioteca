<?php

namespace biblioteca;

use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    protected $fillable = [
        'isReserved',
        'isBorrowed',
        'isIntern'
    ];

}
