<?php

namespace biblioteca\Http\Controllers;

use biblioteca\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        return view('category.list')->with('categories', Category::all());
    }

    public function add(){
        return view('category.add');
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect('/categories')->withInput();
    }
}
