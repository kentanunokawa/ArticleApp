<?php

use Doctrine\DBAL\Driver\Middleware;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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
    return view('/welcome');
});

// 最初のログインルート読み込み
Auth::routes();

Route::group(['middleware'=>'auth'],function(){
    // login
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // topページへ
    Route::get('/top',[App\Http\Controllers\MenuController::class,'index'])->name('top');

    // addMenuページ
    Route::get('/addMenu',[App\Http\Controllers\MenuController::class,'create'])->name('addMenu');

    // store
    Route::post('/store',[App\Http\Controllers\MenuController::class,'store'])->name('store');

    // addComplete
    Route::get('/addComplete',function(){
    return view('addComplete');
    })->name('addComplete');

    // show
    Route::get('/show{id?}',[App\Http\Controllers\MenuController::class,'show'])->name('show');

    // edit
    Route::get('/edit{id?}',[App\Http\Controllers\MenuController::class,'edit'])->name('edit');

    // update
    Route::post('/update{id?}',[App\Http\Controllers\MenuController::class,'update'])->name('update');

    // delete
    Route::get('/delete{id?}',[App\Http\Controllers\MenuController::class,'delete'])->name('delete');

    //deleteComplete
    Route::get('/deleteComplete',function(){
        return view('deleteComplete');
        })->name('deleteComplete');

});




