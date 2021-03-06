<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
    return view('content/index');
});

Route::get('/about', function () {
    return view('other/about');
});

Route::get('/register', function () {
    return view('content/register');
});

Route::post('/user', [UserController::class, 'store']);
