<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\TreatmentController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Auth\LoginController;
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
Route::get('/behandelingen', [HomeController::class, 'behandelingen'])->name('behandelingen');
Route::get('/spa-arrangementen', [HomeController::class, 'spaArrangementen'])->name('spa-arrangementen');
Route::get('/tarieven', [HomeController::class, 'tarieven'])->name('tarieven');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('privacyverklaring', function() {
    return redirect()->to('/assets/documents/privacyverklaring.pdf');
})->name('privacy');

Route::post('/mail/appointment', [AppointmentController::class, 'index'])
    ->middleware([ProtectAgainstSpam::class, 'throttle:5,1'])
    ->name('mail.appointment');

Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/admin/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/admin/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('treatments', TreatmentController::class)->except(['show']);
});
