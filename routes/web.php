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


Auth::routes();

Route::get('/', 'MovieController@index')->name('home');



//Route::get('/roles/users', 'RoleController@users')->name('rolesusers');
Route::get('/users/roles', 'UserController@role')->name('usersroles');
Route::get('/admin/create/movie', 'MovieController@create')->name('createmovie')->middleware('auth','admin');
Route::get('/admin/create/genre', 'GenreController@create')->name('creategenre')->middleware('auth','admin');
Route::get('/admin/create/country', 'CountryController@create')->name('createcountry')->middleware('auth','admin');
Route::get('/admin/create/tag', 'TagController@create')->name('createtag')->middleware('auth','admin');
Route::post('/admin/store/movie', 'MovieController@store')->name('storemovie')->middleware('auth','admin');
Route::post('/admin/store/genre', 'GenreController@store')->name('storegenre')->middleware('auth','admin');
Route::post('/admin/store/country', 'CountryController@store')->name('storecountry')->middleware('auth','admin');
Route::post('/admin/store/tag', 'TagController@store')->name('storetag')->middleware('auth','admin');

Route::get('/admin/edit/movie/{id}', 'MovieController@edit')->name('editmovie')->middleware('auth','admin');
Route::post('/admin/update/movie/{id}', 'MovieController@update')->name('updatemovie')->middleware('auth','admin');
Route::post('/admin/delete/movie/{id}', 'MovieController@destroy')->name('deletemovie')->middleware('auth','admin');
Route::get('/admin/list/movies', 'MovieController@listall')->name('listmovies')->middleware('auth','admin');

Route::get('/admin/list/genres', 'GenreController@index')->name('listgenres')->middleware('auth','admin');
Route::get('/admin/edit/genre/{id}', 'GenreController@edit')->name('editgenre')->middleware('auth','admin');
Route::post('/admin/update/genre/{id}', 'GenreController@update')->name('updategenre')->middleware('auth','admin');
Route::post('/admin/delete/genre/{id}', 'GenreController@destroy')->name('deletegenre')->middleware('auth','admin');

Route::get('/admin/list/countries', 'CountryController@index')->name('listcountries')->middleware('auth','admin');
Route::get('/admin/edit/country/{id}', 'CountryController@edit')->name('editcountry')->middleware('auth','admin');
Route::post('/admin/update/country/{id}', 'CountryController@update')->name('updatecountry')->middleware('auth','admin');
Route::post('/admin/delete/country/{id}', 'CountryController@destroy')->name('deletecountry')->middleware('auth','admin');

Route::get('/admin/list/tags', 'TagController@index')->name('listtags')->middleware('auth','admin');
Route::get('/admin/edit/tag/{id}', 'TagController@edit')->name('edittag')->middleware('auth','admin');
Route::post('/admin/update/tag/{id}', 'TagController@update')->name('updatetag')->middleware('auth','admin');
Route::post('/admin/delete/tag/{id}', 'TagController@destroy')->name('deletetag')->middleware('auth','admin');




//Route::get('/movies', 'MovieController@movies')->name('movies');
Route::get('/movies/{filter?}/{query?}', 'MovieController@movies')->name('movies');
Route::post('/livesearch', 'MovieController@liveSearch')->name('livesearch');
Route::post('/storecomment/{id}', 'CommentController@store')->name('storecomment');
Route::get('/movie/{id}', 'MovieController@show')->name('singlemovie');



Auth::routes();
