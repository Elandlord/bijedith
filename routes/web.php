<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppointmentController;
use Spatie\Honeypot\ProtectAgainstSpam;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('privacyverklaring', function() {
    return redirect()->to('/assets/documents/privacyverklaring.pdf');
})->name('privacy');

Route::post('/mail/appointment', [AppointmentController::class, 'index'])
    ->middleware(ProtectAgainstSpam::class)
    ->name('mail.appointment');
