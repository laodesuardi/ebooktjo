<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
    return view('register.index');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
// Route::get('/thanks', [EmailController::class, 'notifikasi']);
// Route::get('/thanks', [EmailController::class, 'kirim']);


Route::get('/thanks', function () {
    return view('/thanks.index');
});

// Route::get('/email', [EmailController::class, 'kirim']);
// Route::get('/thanks', [EmailController::class, 'notif']);
// Route::get('/thanks', [EmailController::class, 'notif']);
