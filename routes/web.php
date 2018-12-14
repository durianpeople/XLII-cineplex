<?php

use App\Http\Controllers\FilmController;

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
Route::get('/', 'FilmController@daftarFilm');
Route::get('/nowshowing', 'FilmController@nowShowing');

Route::get('/comingsoon', function(){
    return view ('pages.film.comingsoon');
});
Route::get('/buytickets', function(){
    return view ('pages.buytickets');
});
Route::get('/admin', 'AdminController@dashboard');
Route::get('/testing', function(){
	return view('test');
});

// Route::resource('films','FilmsController');