<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthcompanyController;
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', [AuthController::class , 'login']);


Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', [AuthController::class , 'store']);

Route::get('/registercompany', function () {
    return view('auth.registercompany');
});

Route::post('/registercompany', [AuthcompanyController::class , 'company_store']);

Route::get('/userpanel', function() {
    return view('auth.userpanel');
});



