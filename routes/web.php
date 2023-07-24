<?php

use App\Http\Controllers\HogeController;
use App\Http\Controllers\postDataController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\toppageController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\applyController;


//toppage
Route::get('toppage', [toppageController::class, 'index'])->name('toppage');

//post
Route::get('profile', [profileController::class, 'index'])->name('profile');
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
# test
Route::get("/postdata", [postDataController::class, "index"]);
Route::post("/postdata", [postDataController::class, "post"]);

Route::post('/toppage', [TopPageController::class, "index"])->name('index');


//ログイン後の処理
Route::post('/toppage', [TopPageController::class, "login"])->name('login');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/toppage');
})->name('logout');
# もらったやつ.うまくいかない
// Route::get('/articles/create', [PostController::class, 'create'])->name('article.create');

# 自分でルーティング
Route::get('/hoge', [HogeController::class, 'index']);
Route::post('/hoge', [HogeController::class, 'post']);
Route::get('/logout', [TopPageController::class, "logout"])->name('logout');

# apply雛形
Route::get('/apply', [applyController::class, "index"])->name('apply');
# applyルーティング
Route::get('/apply/{id}', [applyController::class, 'apply']);
Route::post('/apply/{id}', [applyController::class, 'applied']);
