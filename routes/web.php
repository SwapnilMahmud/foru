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
    return view('welcome');
});
Route::view('web','web');
Route::view('news1','news1');
Route::view('news2','news2');
Route::get('/web', function () {
    return view('web',array('data'=>array('name'=>'swapnil'), 'file'=>array(1,2,3,4,5,6)));
});
