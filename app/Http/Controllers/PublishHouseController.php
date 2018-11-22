<?php

namespace biblioteca\Http\Controllers;

use biblioteca\PublishHouse;
use Illuminate\Http\Request;

class PublishHouseController extends Controller
{
    public function index()
    {

        return view('publish_house.list')->with('phouses', PublishHouse::all());
    }

    public function add(){
        return view('publish_house.add');
    }

    public function store(Request $request)
    {
        PublishHouse::create($request->all());
        return redirect('/phouses')->withInput();
    }
}
