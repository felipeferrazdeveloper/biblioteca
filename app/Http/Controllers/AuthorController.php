<?php

namespace biblioteca\Http\Controllers;

use biblioteca\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('author.list')->with('authors', Author::all());
    }

    public function add(){
        return view('author.add');
    }

    public function store(Request $request)
    {
        Author::create($request->all());
        return redirect('/authors')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \biblioteca\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \biblioteca\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \biblioteca\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \biblioteca\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {

    }

    public function remove($id){
        $author = Author::find($id);
        $author ->delete();
        return redirect()->action('AuthorController@index');
    }
}
