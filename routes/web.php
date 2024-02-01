<?php

use App\Http\Controllers\BookingController;
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
    return view('welcome');
});
Route::get('booking.com', [BookingController::class, 'index'])->name('booking.com');
Route::post('update-recorde', [BookingController::class, 'update']);
Route::get('select-room', [BookingController::class, 'selectroom'])->name('select-room');
Route::post('selected-room', [BookingController::class, 'selectedroom'])->name('selected-room');
Route::get('user-information',[BookingController::class, 'userrecord'])->name('userrecord');
Route::post('reservation-form', [BookingController::class, 'reservationform'])->name('reservation-form');

