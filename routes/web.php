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

/**
 * routing TEST
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

/**
 * routing TEST END
 */

/**
 * 회원가입
*/
Route::view('join','join/join')->name('join');

Route::post('joinact', 'loginCtr@join');

/**
 * 회원가입 end
 */

/**
 * 로그인
*/

Route::view('login','login/login')->name('login');
Route::get('loginOk','loginCtr@loginOk')->name('loginOk');

Route::post('loginact', 'loginCtr@login');


/**
 * 로그인 end
 */