<?php

namespace biblioteca;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $fillable = [
        'name'
    ];
}
