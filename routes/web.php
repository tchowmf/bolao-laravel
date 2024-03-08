<?php

use App\Http\Controllers\DriversController;
use App\Http\Controllers\GuessController;
use App\Http\Controllers\RacesController;
use App\Http\Controllers\ResultsController;
use Illuminate\Support\Facades\Route;

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
    return view('Template.blank');
});

Route::get('/pilotos', [DriversController::class, 'getDrivers'])->name('drivers');

Route::get('/corridas', [RacesController::class, 'getRaces']);

Route::group(['prefix' => 'palpites'], function() {
    Route::get('/',  [GuessController::class, 'getGuess']);
    Route::get('/{country}', [GuessController::class, 'getRaceGuess'])->name('race.guess');
});

Route::group(['prefix' => 'resultados'], function() {
    Route::get('/',  [ResultsController::class, 'getResults']);
    Route::get('/{country}', [ResultsController::class, 'getRaceResult'])->name('race.result');
});

Route::get('/rank', [ResultsController::class, 'getRank']);

Route::get('/enviar-palpite', [GuessController::class, 'getForm']);
Route::post('/enviar-palpite', [GuessController::class, 'postGuess']);
