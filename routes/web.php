<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendeesController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[EventController::class,'index'])->name('event');
Route::post('/save-events',[EventController::class, 'save_events'])->name('saveEvents');
Route::get('/delete-events/{id}', [EventController::class, 'delete_events'])->name('removeEvents');
Route::get('/update-events/{id}', [EventController::class, 'update_events'])->name('updateEvents');
Route::put('/save-updated-events/{id}', [EventController::class, 'save_updated_events'])->name('saveUpdatedEvents');

Route::get('/a',[AttendeesController::class,'index'])->name('attendee');
Route::post('/save-attendees',[AttendeesController::class, 'save_attendees'])->name('saveAttendees');
Route::get('/delete-/attendees{id}', [AttendeesController::class, 'delete_attendees'])->name('removeAttendees');
Route::get('/update-attendees/{id}', [AttendeesController::class, 'update_attendees'])->name('updateAttendees');
Route::put('/save-updated-attendees/{id}', [AttendeesController::class, 'save_updated_attendees'])->name('saveUpdatedAttendees');