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

// Route::get('/', function () {
//     return view('layout');
// });

Route::get('/', function () {
    return view('layout');
});

Route::get('/top1', function () {
    return view('top');
})->middleware('auth');
Route::get('/post1', function () {
    return view('post');
})->middleware('auth');
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/main1', function () {
    return view('main');
});

Auth::routes();

//ログインユーザーの全情報
Auth::user();

//ログインユーザーのID
Auth::id();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', [App\Http\Controllers\FormController::class,'postpage'])->name('create')->middleware('auth');
Route::post('/newpostsend', [App\Http\Controllers\FormController::class,'savenew'])->name('newpostsend')->middleware('auth');
// 投稿ページを表示
// Route::get('/create', 'FormController@postpage');
// 投稿をコントローラーに送信
// Route::post('/newpostsend', 'FormController@savenew'); 

// 投稿一覧を表示する
Route::get('/index', [App\Http\Controllers\FormController::class,'index'])->name('index')->middleware('auth');

Route::get('/show/{id}', [App\Http\Controllers\FormController::class,'show'])->name('show')->middleware('auth');

// リッチテキストエディターページ
Route::get('/create2', [App\Http\Controllers\FormController::class,'wys'])->name('create2')->middleware('auth');

