<?php

namespace biblioteca;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'pages',
        'edition',
        'ISBN',
        'category_id',
        'author_id',
        'publish_house_id'
    ];

    public function category(){
        return $this->belongsTo(Category);
    }

    public function author(){
        return $this->belongsTo(Author);
    }

    public function publishHouse(){
        return $this->belongsTo(PublishHouse);
    }
}
