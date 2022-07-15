<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AccountController;

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
    return view('index');
});

Route::resource('account', AccountController::class);

/*
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});*/

Route::get('/register',[AccountController::class,'store']);

Route::get('/password',[AccountController::class,'update']);

Route::get('/login',[AccountController::class,'show']);
/*
Route::get('/password', function () {
    return view('password');
});*/

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
