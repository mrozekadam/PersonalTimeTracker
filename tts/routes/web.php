<?php

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

Route::get('/', function () {
    return view('welcome');
});


/**
 * SecurityController
 */
Route::prefix('security')->group(function () {

    
    Route::get('', [SerucityController::class, 'index']);

});