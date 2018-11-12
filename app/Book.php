<?php

namespace biblioteca;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'pages',
        'edition',
        'ISBN'
    ];
}
