<?php

use App\Http\Controllers\Admin\TreatmentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\TestimonialController;
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

Route::get('/ervaring-delen', [TestimonialController::class, 'create'])->name('testimonials.create');
Route::post('/mail/testimonial', [TestimonialController::class, 'store'])
    ->middleware([ProtectAgainstSpam::class, 'throttle:5,1'])
    ->name('mail.testimonial');
Route::get('/testimonials/{testimonial}/approve', [TestimonialController::class, 'approve'])
    ->middleware('signed')
    ->name('testimonials.approve');
Route::get('/testimonials/{testimonial}/reject', [TestimonialController::class, 'reject'])
    ->middleware('signed')
    ->name('testimonials.reject');
Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('treatments', TreatmentController::class)->except(['show']);
});
