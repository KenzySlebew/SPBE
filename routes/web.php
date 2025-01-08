<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\InfographicController;
use App\Http\Controllers\ProfilSPBEController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::resource('news', NewsController::class);
// Route::resource('announcements', AnnouncementController::class);
// Route::resource('infographics', InfographicController::class);
Route::get('/profil-spbe', [ProfilSPBEController::class, 'profile'])->name('profil.spbe');
