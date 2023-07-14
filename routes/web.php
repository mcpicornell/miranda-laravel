<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrdersController;


Route::get('/', [IndexController::class, 'index']);
Route::get('/rooms', [RoomController::class, 'index']);
Route::get('/rooms/{id}', [RoomController::class, 'roomDetails']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/offers', [RoomController::class, 'offers']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/orders', [OrdersController::class, 'index'])->name('orders.index');
    Route::get('/dashboard', [OrdersController::class, 'index'])->name('orders.index');
    Route::post('/new-order', [OrdersController::class, 'store'])->name('orders.store');
    Route::get('/new-order', [OrdersController::class, 'newOrder'])->name('newOrder.newOrder');

    Route::get('/order-changes', [OrdersController::class, 'orderChanges'])->name('orderChanges.orderChanges');
    Route::put('/order-changes', [OrdersController::class, 'update'])->name('orderChanges.update');
    Route::get('/delete-order', [OrdersController::class, 'deleteOrder'])->name('deleteOrder.deleteOrder');
    Route::delete('/delete-order', [OrdersController::class, 'delete'])->name('deleteOrder.delete');
});

require __DIR__ . '/auth.php';
