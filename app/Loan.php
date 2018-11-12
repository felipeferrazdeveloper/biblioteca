<?php

namespace biblioteca;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'loanDate',
        'returnDate',
        'expectedReturnDate'
    ];
}
