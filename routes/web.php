<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsAdmin;

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
Route::get('/events/create', [EventsController::class, "create"])->name('admin_create')->middleware(IsAdmin::class);
Route::get('/events/edit/{id}', [EventsController::class, "edit"])->name('admin_edit')->middleware(IsAdmin::class);
Route::delete('events/delete/{id}', [EventsController::class, "destroy"])->name('admin_destroy')->middleware(IsAdmin::class);
Route::get('events/store', [EventsController::class, "store"])->name('admin_store')->middleware(IsAdmin::class);
Route::get('events/update/{id}', [EventsController::class, "update"])->name('admin_update')->middleware(IsAdmin::class);


Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/show/{id}', [HomeController::class, "show"])->name('show_event');

require __DIR__ . '/auth.php';
//Route::resource('events', EventsController::class);




//Route::get('', function ($id) {
    
//})->name("");