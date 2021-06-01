<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ApprovalController;

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
    return redirect()->route('login');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function() {
    Route::get('/', function() {
        return view('admin.index');
    })->name('admin.index');
    Route::resource('kendaraan', VehicleController::class);
    Route::resource('peminjaman', TransactionController::class);
});

Route::prefix('supervisor')->middleware(['auth'])->group(function() {
    // Route::get('/', function() {
    //     return view('spv.index');
    // })->name('spv.index');
    Route::get('/approval-request', [ApprovalController::class, 'index'])->name('approval-request');
});