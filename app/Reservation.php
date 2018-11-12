<?php

namespace biblioteca;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'isUser',
        'isManager',
        'isLibrarian',
        'isWorker'
    ];
}
