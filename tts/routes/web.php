<?php

use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerucityController;

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

Route::get('/', [SerucityController::class, 'index']);


/**
 * SecurityController
 */
Route::prefix('security')->group(function () {


});

/**
 * DashController
 */
Route::prefix('dash')->group(function () {

    Route::get('/', [DashController::class, 'index']);
    Route::get('trackers', [DashController::class, 'trackers']);
    Route::get('reports', [DashController::class, 'reports']);
    Route::get('settings', [DashController::class, 'settings']);

});