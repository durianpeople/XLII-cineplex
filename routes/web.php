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
Route::get('/comingsoon', 'FilmController@comingSoon');
Route::get('/buytickets', 'FilmController@buyTickets');

Route::get('/testing', 'FilmController@testing');

Route::prefix('admin')->group(function(){
    Route::get('/', 'AdminController@dashboard');
    Route::prefix('/film')->group(function(){
        Route::get('/','AdminController@film');
        Route::post('/{id}','AdminController@filmEditSubmit');
        Route::get('/{id}','AdminController@filmEdit');
    });
});
// Route::resource('films','FilmsController');