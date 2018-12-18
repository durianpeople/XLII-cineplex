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
Route::post('/checkout', 'TransaksiController@checkout')->middleware('auth');
Route::get('/tickets', 'TransaksiController@tickets')->middleware('auth');

Route::get('/film/{id}', 'FilmController@details');

Route::get('/testing', 'FilmController@testing');

Route::prefix('admin')->group(function(){
    Route::get('/', 'AdminController@dashboard');
    Route::prefix('film')->group(function(){
        Route::get('/','FilmAdminController@film');
        Route::get('/add','FilmAdminController@create');
        Route::post('/add','FilmAdminController@createConfirm');
        Route::get('/{id}','FilmAdminController@edit');
        Route::get('/delete/{id}','FilmAdminController@delete');
        Route::post('/add-putar','FilmAdminController@addputar');
        Route::get('/delete-putar/{id}','FilmAdminController@deleteputar');
        Route::post('/{id}','FilmAdminController@editConfirm');
    });
    Route::get('/transaksi', 'TransaksiAdminController@list');
    Route::get('/putar', 'DetilPemutaranAdminController@list');
    Route::get('/user', 'UserAdminController@list');
});
// Route::resource('films','FilmsController');