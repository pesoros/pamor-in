<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BuilderController;
use App\Http\Controllers\AuthController;

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

// route with subdomain
Route::group(['domain' => '{company_name}.localhost'], function ($company_name) {
    // Route::get('/', 'DisplayController@index($company_name)')->name('display');
    Route::get('/', [DisplayController::class, 'index', $company_name]);
});

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

// Route::get('/', function () {
//     return redirect('/dashboard');
// });

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('builder', [BuilderController::class, 'index']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});