<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\AdherentController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\TournoiController;
use App\Http\Controllers\MatchController;

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

Route::get('/', [AccueilController::class, 'index']);
Route::resource('clubs', ClubController::class);
Route::resource('equipes', EquipeController::class);
Route::resource('adherents', AdherentController::class);
Route::resource('tournois', TournoiController::class);
Route::resource('matches', MatchController::class);