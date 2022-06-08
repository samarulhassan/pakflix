<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});


Route::get('/history', function () {
    return view('history');
});

Route::get('/audionovels', function () {
    return view('audionovelpage');
});



Route::get('/', function () {
    return view('index');
});



Route::get('/signup', function () {
    return view('signup');
});

Route::get('/accounts/{id}', function () {
    return view('accounts');
});



Route::post('/add-user','UsersController@store')->name('adduser');

Route::get('/login', 'UsersController@login')->name('login');


Route::post('/account','UsersController@accounts_details')->name('account');
Route::post('UsersController@logout')->name('logout');



Route::get('/userhome', function () {
    return view('userhome');
});







Route::get('/userhomenew', 'DramaController@userhomenew')->name('userhomenew');



Route::get('/dramavideo/{dramaid}', 'DramaController@display_drama');


Route::get('/novelvideo/{novelid}', 'NovelController@display_novel');
Route::get('/movievideo/{movieid}', 'MovieController@display_movie');



Route::get('/audionovels', 'NovelController@get_novels_novelpage');


Route::get('/dramapage', 'DramaController@get_dramas_dramapage');

Route::get('/moviespage', 'MovieController@get_movies_moviepage');


Route::get('/history', 'HistoryController@display_history');



Route::get('/logout', 'UsersController@logout')->name('logout');
Route::get('/Addtoplaylist_drama/{id}', 'PlaylistController@Addtoplaylist_drama');
Route::get('/Addtoplaylist_movie/{id}', 'PlaylistController@Addtoplaylist_movie');
Route::get('/Addtoplaylist_novel/{id}', 'PlaylistController@Addtoplaylist_novel');

Route::get('/playlist', 'PlaylistController@Display_playlist');
Route::get('search_drama' , 'DramaController@search_drama');
Route::get('search_novel' , 'NovelController@search_novel');
Route::get('search_movie' , 'MovieController@search_movie');

