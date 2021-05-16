<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BuilderController;

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

Route::get('/', function () {
    return redirect('/dashboard');
});
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/builder', [BuilderController::class, 'index']);