<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CurrentTransactionController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

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

// user
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::post('/home', [ReviewController::class, 'store'])->name('review.store');
Route::get('/type', [TypeController::class, 'userIndex'])->name('type.index.user');
Route::post('/type', [TypeController::class, 'available'])->name('type.available');
Route::get('/type/{id}', [TypeController::class, 'userShow'])->name('type.show.user');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');

// admin
Route::get('/admin/login', [AuthController::class, 'login'])->name('login');
Route::post('/admin/login', [AuthController::class, 'authenticate'])->name('login');

Route::middleware('auth')->group(function () {
    Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/admin', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

    Route::get('/admin/type', [TypeController::class, 'index'])->name('type.index.admin');
    Route::get('/admin/type/create', [TypeController::class, 'create'])->name('type.create');
    Route::post('/admin/type/store', [TypeController::class, 'store'])->name('type.store');
    // Route::get('/admin/type/{id}', [TypeController::class, 'show'])->name('type.show.admin');
    Route::get('/admin/type/edit/{id}', [TypeController::class, 'edit'])->name('type.edit');
    Route::put('/admin/type/update/{id}', [TypeController::class, 'update'])->name('type.update');
    Route::delete('/admin/type/delete/{id}', [TypeController::class, 'destroy'])->name('type.destroy');

    Route::get('/admin/room', [RoomController::class, 'index'])->name('room');
    Route::get('/admin/room/create', [RoomController::class, 'create'])->name('room.create');
    Route::post('/admin/room/store', [RoomController::class, 'store'])->name('room.store');
    Route::get('/admin/room/{id}', [RoomController::class, 'show'])->name('room.show');
    Route::get('/admin/room/edit/{id}', [RoomController::class, 'edit'])->name('room.edit');
    Route::put('/admin/room/update/{id}', [RoomController::class, 'update'])->name('room.update');
    Route::delete('/admin/room/delete/{id}', [RoomController::class, 'destroy'])->name('room.destroy');

    Route::get('/admin/transaction/current', [TransactionController::class, 'indexCurrent'])->name('transaction.index.current');
    Route::get('/admin/transaction/create', [TransactionController::class, 'create'])->name('transaction.create');
    Route::post('/admin/transaction/store', [TransactionController::class, 'store'])->name('transaction.store');
    Route::get('/admin/transaction/edit/{id}', [TransactionController::class, 'edit'])->name('transaction.edit');
    Route::put('/admin/transaction/update/{id}', [TransactionController::class, 'update'])->name('transaction.update');
    Route::delete('/admin/transaction/current/delete/{id}', [TransactionController::class, 'destroyCurrent'])->name('transaction.destroy.current');
    Route::put('/admin/tranascation/checkout/{id}', [TransactionController::class, 'checkout'])->name('transaction.checkout');

    Route::get('/admin/transaction/past', [TransactionController::class, 'indexPast'])->name('transaction.index.past');
    Route::delete('/admin/transaction/past/delete/{id}', [TransactionController::class, 'destroyPast'])->name('transaction.destroy.past');

    Route::get('/admin/notif', [NotificationController::class, 'index'])->name('notif');
    Route::put('/admin/notif/read/{id}', [NotificationController::class, 'read'])->name('notif.read');

    Route::get('/admin/photo', [PhotoController::class, 'index'])->name('photo');
    Route::get('/admin/photo/create', [PhotoController::class, 'create'])->name('photo.create');
    Route::post('/admin/photo/store', [PhotoController::class, 'store'])->name('photo.store');
    Route::delete('/admin/photo/delete/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy');

    Route::get('/admin/review', [ReviewController::class, 'index'])->name('review');
    Route::get('/admin/review/{id}', [ReviewController::class, 'show'])->name('review.show');
    Route::delete('/admin/review/delete/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');
});
