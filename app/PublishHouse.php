<?php

namespace biblioteca;

use Illuminate\Database\Eloquent\Model;

class PublishHouse extends Model
{
    protected $fillable = ['name'];

    public function books(){
        $this->hasMany(Book);
    }
}
