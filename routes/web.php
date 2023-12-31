<?php

use App\Http\Controllers\HogeController;
use App\Http\Controllers\postDataController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\toppageController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\applyController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\rankingController;
use App\Http\Controllers\adminpageController;
use App\Http\Controllers\heartClickController;


//toppage
Route::get('toppage', [toppageController::class, 'index'])->name('toppage');
//post
Route::get('profile', [profileController::class, 'index'])->name('profile');

Route::get('/confirmation/{id}', [profileController::class, 'confirmation']);

Route::post('profile', [profileController::class, 'edit'])->name('edit');
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

//toppage関連
Route::post('/toppage', [TopPageController::class, "index"])->name('index');
//タグ検索
// Route::get('/routesearch', [TopPageController::class, "search"])->name('search');
Route::get('/events', [TopPageController::class, 'tag'])->name('events.tag');
//ログイン後の処理
Route::post('/toppage', [TopPageController::class, "login"])->name('login');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/toppage');
})->name('logout');
# もらったやつ.うまくいかない
// Route::get('/articles/create', [PostController::class, 'create'])->name('article.create');

# 自分でルーティング
Route::get('/hoge', [HogeController::class, 'index'])->name('hoge');
Route::post('/hoge', [HogeController::class, 'post'])->name('hoge');

Route::get('/logout', [TopPageController::class, "logout"])->name('logout');

# apply雛形
Route::get('/apply', [applyController::class, "index"])->name('apply');
# applyルーティング
Route::get('/apply/{id}', [applyController::class, 'apply']);
Route::get('/applied/{id}', [applyController::class, 'applied']);

//admin page
Route::get('/adminpage/index', [adminpageController::class, 'index'])->name('adminpage.index');
Route::get('/adminpage/posed', [adminpageController::class, 'posed'])->name('adminpage.posed');
Route::get('/adminpage/join', [adminpageController::class, 'join'])->name('adminpage.join');
Route::get('/adminpage/joined', [adminpageController::class, 'joined'])->name('adminpage.joined');


//detail page
Route::get('/ranking', [rankingController::class, 'index'])->name('ranking');

//ranking page
Route::get('/detail', [detailController::class, 'index'])->name('detail');
Route::get('/detail/{id}', [detailController::class, 'index']);

//更新ハンドラ
Route::get('/heartclick/{id}', [heartClickController::class, 'index']);
