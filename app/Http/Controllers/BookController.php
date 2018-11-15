<?php

namespace biblioteca\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function consultCollection(){
        return view('book.consultCollection');
    }
}
