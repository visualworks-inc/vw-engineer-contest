<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContestController;
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
    return redirect('/contest');
});

Route::get('/contest', [ContestController::class, 'index']);
Route::post('/contest/confirm', [ContestController::class, 'confirm']);
Route::post('/contest/store', [ContestController::class, 'store']);
Route::get('/contest/complete', [ContestController::class, 'complete']);
