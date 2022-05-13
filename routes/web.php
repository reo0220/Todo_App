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

Route::get('/', 'TaskController@index');

// /tasksにアクセスするとTaskControllerのindexアクションが実行
Route::resource('tasks','TaskController');

//HTTPS接続でアセットを読み込むための処理
if(env('APP_ENV') === 'local'){
    URL::forceScheme('https');
}
