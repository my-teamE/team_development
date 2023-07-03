<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\toppageController;
use App\Http\Controllers\profileController;

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

// Route::get('/, function () {
//      return view('welcom);
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



