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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {

    // Check if the user is logged in
    /*
    if (Auth::check()) {
        return 'User is logged in';
    }
    else {
        return'User is logged out';
    }
    */

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
