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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::resource('home','HomeController');


//Delete user
Route::delete('removeUser/{id}', 'UserController@removeUser')->name('remove');
//explore user
Route::get('explore/{id}', 'UserController@showExploreUser')->name('exploreUser');

//Edit User


// Route::get('/edit', function () {
//     return view('edit');
// });

// Route::get('/', function () {
//     return view('train');
// });