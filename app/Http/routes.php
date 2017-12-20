<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');


require(__DIR__ . '/Routes/auth.php');


Route::group(['middleware' => ['auth', 'registered']], function () {

    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

    require(__DIR__ . '/Routes/continentes.php');
    require(__DIR__ . '/Routes/admin.php');

});
