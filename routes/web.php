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

//Route::resource('employes', 'EmployesController');
Route::resource('membres', 'MembreController');
Route::resource('teams', 'TeamController');
Route::resource('zones', 'ZoneController');
Route::resource('calendar', 'CalendarController');
Route::get('membres', '\App\Http\Controllers\MembreController@index')->name('membres');
Route::get('zones', '\App\Http\Controllers\ZoneController@index')->name('zones');
Route::get('teams', '\App\Http\Controllers\TeamController@index')->name('teams');
Route::get('calendar', '\App\Http\Controllers\CalendarController@index')->name('calendar');

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
Route::get('/membres', function () {
    //return view('indexmembres', 'MembreController');
    Route::resource('membres', 'MembreController');

});*/

require __DIR__.'/auth.php';
