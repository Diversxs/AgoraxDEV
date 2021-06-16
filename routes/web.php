<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Auth\Events\Login;

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


Route::get('/events/EventsBookedIn', [EventsController::class, 'userEvents'])->name('userEvents');
Route::get('/events/subscribe/{i}', [EventsController::class, "bookEvent"])->name('subscribe');
Route::get('/events', [EventsController::class, "index"])->name('logged_index');
Route::get('/events/show/{id}', [EventsController::class, "show"])->name('logged_show');
Route::get('/events/create', [EventsController::class, "create"])->name('admin_create')->middleware(IsAdmin::class);
Route::get('/events/{id}/edit', [EventsController::class, "edit"])->name('admin_edit')->middleware(IsAdmin::class);
Route::delete('/events/delete/{id}', [EventsController::class, "destroy"])->name('admin_delete')->middleware(IsAdmin::class);
Route::post('/events/store', [EventsController::class, "store"])->name('admin_store')->middleware(IsAdmin::class);
Route::patch('/events/{event}/update', [EventsController::class, "update"])->name('admin_update')->middleware(IsAdmin::class);
Route::get('/events/passed', [EventsController::class, 'passedEvents'])->name('passedEvents');




Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/show/{id}', [HomeController::class, "show"])->name('show_event');

require __DIR__ . '/auth.php';
