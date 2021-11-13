<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KandidatController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return "ini landing page kalo mau";
})->name('home');
Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->middleware('role:admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/kandidat', [KandidatController::class, 'index'])->name('kandidat.index');
        Route::get('/kandidat/tambah', [KandidatController::class, 'create'])->name('kandidat.create');
        Route::post('/kandidat/tambah', [KandidatController::class, 'store'])->name('kandidat.store');
        Route::get('/kandidat/edit/{kandidat}', [KandidatController::class, 'edit'])->name('kandidat.edit');
        Route::post('/kandidat/edit/{kandidat}', [KandidatController::class, 'update'])->name('kandidat.update');
    });
});
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);