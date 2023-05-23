<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('login');
});

Route::get('/login', [UserController::class, 'index']);
Route::post('/login/checklogin', [UserController::class, 'checklogin']);
Route::get('/login/successlogin', [UserController::class, 'successlogin']);
Route::get('/login/logout', [UserController::class, 'logout']);
Route::get('/companies/index', [CompanyController::class, 'index']);

Route::resource('companies', CompanyController::class);

Route::get('list', [CompanyController::class, 'index']);

