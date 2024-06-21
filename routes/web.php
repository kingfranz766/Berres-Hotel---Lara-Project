<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserDashController;
use App\Http\Controllers\StaffDashController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ServiceController;

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

/* Routes */
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/authenticate', 'App\Http\Controllers\AuthController@authenticate')->name('authenticate');
Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
Route::post('/staff-logout', 'App\Http\Controllers\AuthController@staff_logout')->name('staff-logout');
Route::post('/signup-success', 'App\Http\Controllers\AuthController@signup')->name('signup-success');
Route::post('/reservation', 'App\Http\Controllers\AuthController@reservation')->name('reservation');
Route::post('/update-room', [RoomController::class, 'updateRoom'])->name('update-room');
Route::post('/create-staff', [StaffDashController::class, 'add_staff'])->name('create-staff');

//Public/Guess Routes
Route::get('/forgot-pass', function () {
    return view('berres/forgotpass');
})->name('forgot-pass');

Route::get('/policy', function () {
    return view('berres/policy');
})-> name('policy');

/* Dashboard Routes */
//Customer
Route::get('/', [UserDashController::class, 'index'])->middleware('auth')-> name('home');
Route::get('/user/transactions', [UserDashController::class, 'userdash'])->middleware('auth')-> name('user-transactions');
Route::get('/user/profile', [UserDashController::class, 'profile'])->middleware('auth')-> name('user-profile');

//Staff
Route::middleware('auth:staff')->group(function () {
    Route::get('/staff/dashboard', [StaffDashController::class, 'index'])->name('staff-dash');
    Route::get('/staff/dashboard/users', [StaffDashController::class, 'users'])->name('staff-dash-users');
    Route::get('/staff/dashboard/user-logs', [StaffDashController::class, 'user_logs'])->name('staff-dash-userlogs');
    Route::get('/staff/dashboard/rooms', [StaffDashController::class, 'rooms'])->name('staff-dash-rooms');
    Route::get('/staff/dashboard/services', [StaffDashController::class, 'services'])->name('staff-dash-services');
    Route::get('/staff/dashboard/reservations', [StaffDashController::class, 'reservations'])->name('staff-dash-reservations');
    Route::get('/staff/dashboard/add-staff', [StaffDashController::class, 'staff'])->name('staff-dash-add-staff');
});

//Rooms
Route::get('/rooms', [RoomController::class, 'index'])->middleware('auth')-> name('all_rooms');

//Services
Route::get('/services', [ServiceController::class, 'index'])->middleware('auth')-> name('all_services');

//Reservation
Route::get('/user/reservation', [AuthController::class, 'reservation'])->name('reservation')->middleware('auth');
Route::post('/reservations', [AuthController::class, 'store'])-> name('reservations.store');    