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
    return view('welcome');
});

Route::get('/direct', function () {

    echo "echo str</br>";
    return "return str";
});

Route::get('/test', function () {

    $view = view('test');
    $view->greeting = "Hey~ What's up";
    $view->name = 'everyone';

    return $view;

});

Route::get('/test/id/{id}/pw/{pw}', function ($id, $pw) {

    $view = view('test');
    $view->greeting = "Hey~ What's up ".$id;
    $view->name = 'everyone '.$pw;

    return $view;

});

Route::get('mk/{id?}', 'makingCtr@viewing');

Route::get('sdb', 'makingCtr@selectDB');

Route::get('modeldb', 'makingCtr@useDB');

Route::get('ftest', 'requestCtr@defaultparams');

Route::get('getftest', 'requestCtr@getparams');

Route::post('postftest', 'requestCtr@postparams');

Route::put('putparams', 'requestCtr@putparams');


Route::get('join', function () {
    return view('/join/join');
});
Route::post('joinact', 'loginCtr@join');

Route::get('login', function () {
    return view('/login/login');
});

Route::post('loginact', 'loginCtr@login');