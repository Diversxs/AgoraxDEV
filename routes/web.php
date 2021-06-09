<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;

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

//Route::get('/', function () {
//return view('event.index');
//});


Route::get('/events', [EventsController::class, "index"])->name('logged_index');
Route::get('/events/show/{id}', [EventsController::class, "show"])->name('logged_show');
Route::get('/events/create', [EventsController::class, "create"])->name('admin_create');
Route::get('/events/edit/{id}', [EventsController::class, "edit"])->name('admin_edit');
Route::resource('events', EventsController::class);

Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/show/{id}', [HomeController::class, "show"])->name('show_event');

require __DIR__ . '/auth.php';
//Route::resource('events', EventsController::class);




//Route::get('', function ($id) {

//})->name("");
