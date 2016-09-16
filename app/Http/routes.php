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

/*
Route::get('/', function () {
    return view('welcome');
});
*/




Route::resource('/home', 'HomeController@index');


/**
*   ROUTE - ALERT
*/
Route::get('/alert', function(){
    return redirect('home')->with('info', 'Successfully Signup.');
});



/**
* Authentication
*/

Route::get('/signup', array(
    'uses'          =>  '\App\Http\Controllers\AuthController@getSignup',
    'as'            =>  'auth.signup',
    'middleware'    =>  ['guest'],
));


Route::post('/signup', array(
    'uses'          =>  '\App\Http\Controllers\AuthController@postSignup',
    'middleware'    =>  ['guest'],
));




/**
* SIGNIN
*/

Route::get('/signin', array(
    'uses'          =>  '\App\Http\Controllers\AuthController@getSignin',
    'as'            =>  'auth.signin',
    'middleware'    =>  ['guest'],
));


Route::post('/signin', array(
    'uses'          =>  '\App\Http\Controllers\AuthController@postSignin',
    'middleware'    =>  ['guest'],
));

Route::get('/signout', array(
    'uses'          =>  '\App\Http\Controllers\AuthController@getSignout',
    'as'            =>  'auth.signout'
));
