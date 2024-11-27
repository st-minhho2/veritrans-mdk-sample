<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CvsController;
use App\Http\Controllers\MpiController;
use App\Http\Controllers\PushController;
use App\Http\Controllers\RakutenController;

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
    return view('welcome');
});

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/card', [CardController::class, 'index']);
Route::post('/card', [CardController::class, 'cardAuthorize']);
Route::get('/card/result/{orderId}', [CardController::class, 'authorizeResult']);

Route::get('/mpi', [MpiController::class, 'index']);
Route::post('/mpi', [MpiController::class, 'mpiAuthorize']);
Route::post('/mpi/result', [MpiController::class, 'result']);

Route::get('/cvs', [CvsController::class, 'index']);
Route::post('/cvs', [CvsController::class, 'cvsAuthorize']);
Route::get('/cvs/result/{orderId}', [CvsController::class, 'authorizeResult']);

Route::get('/rakuten', [RakutenController::class, 'index']);
Route::post('/rakuten', [RakutenController::class, 'rakutenAuthorize']);
Route::get('/rakuten/result', [RakutenController::class, 'result']);

Route::post('/push/mpi', [PushController::class, 'mpi']);
Route::post('/push/rakuten', [PushController::class, 'rakuten']);
