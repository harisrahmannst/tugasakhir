<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\TransactionController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/room', [\App\Http\Controllers\RoomController::class, 'index'])->name('indexroom');

Route::resource('/rooms', RoomController::class);
Route::resource('/roomstype', RoomtypeController::class);
Route::resource('/reservasi', TransactionController::class);

Route::get('/room/createroom', function () {
    return view('rooms.addroom');
})->middleware(['auth', 'verified'])->name('createroom');

Route::post('/room/createroom', [\App\Http\Controllers\RoomController::class, 'store'])->name('store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
