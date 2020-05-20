<?php

use Illuminate\Support\Facades\Route;

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
    $procedures = collect([
        0 => [
            'img'           => '/assets/images/service/spa2.png',
            'name'          => 'Pedicure',
            'description'   => 'Een pedicure of voetverzorging is een behandeling van de voeten.'
        ],
        1 => [
            'img'           => '/assets/images/service/spa3.png',
            'name'          => 'Manicure',
            'description'   => 'Een manicure of handverzorging is een behandeling van de handen.'
        ],
        2 => [
            'img'           => '/assets/images/service/spa4.png',
            'name'          => 'Spabehandeling',
            'description'   => 'Met een spabehandeling komt u helemaal tot rust.'
        ],
    ]);

    return view('pages.homepage.index', compact('procedures'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
