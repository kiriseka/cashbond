<?php

use App\Http\Controllers\DashboardTransactionController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('home');
})->name('home')->middleware('auth');

// Route::get('/catatan', function () {
//     return view('catatan');
// })->middleware('auth');

Route::resource('/transaction',DashboardTransactionController::class)->middleware('auth');
// Route::get('/transaction', $search . '/transaction');


Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::post('/send', [HelpController::class, 'sendMessage'])->middleware('auth');