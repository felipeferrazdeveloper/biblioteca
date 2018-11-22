<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Rota principal
Route::get('/', function () {
    return view('welcome');
});

Route::resource('authors', 'AuthorController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Book Routes
Route::get('/consultCollection', 'BookController@consultCollection')->name('consultCollection');
Route::get('/books/add', 'BookController@add')->name('addBook');
Route::get('/books', 'BookController@list')->name('listBook');
Route::get('/books/show/{id}', 'BookController@show');
Route::get('/books/remove/{id}', 'BookController@remove');
Route::post('/books/store', 'BookController@store')->name('storeBooks' );



//Author routes
Route::get('/author/add', 'AuthorController@add')->name('addAuthor');
Route::post('/author/store', 'AuthorController@store')->name('storeAuthor');
Route::get('/authors', 'AuthorController@index')->name('listAuthor');
Route::get('/author/show/{id}', 'AuthorController@show');
Route::get('/author/remove/{id}', 'AuthorController@remove');

//Publish House Routes
Route::get('/phouse/add', 'PublishHouseController@add')->name('addPHouse');
Route::post('/phouse/store', 'PublishHouseController@store')->name('storePHouse' );
Route::get('/phouses', 'PublishHouseController@index')->name('listPublishHouses');
Route::get('/phouses/remove/{id}', 'PublishHouseController@remove');

//Categories Routes
Route::get('/category/add', 'CategoryController@add')->name('addCategory');
Route::post('/category/store', 'CategoryController@store')->name('storeCategories' );
Route::get('/categories', 'CategoryController@index')->name('listCategories');
Route::get('/category/remove/{id}', 'CategoryController@remove');



Route::get('/publishHouse/add', 'PublishHouseController@add')->name('addPublishHouse');
Route::get('/category/add', 'CategoryController@add')->name('addCategory');
Route::get('/author/add', 'AuthorController@add')->name('addAuthor');
