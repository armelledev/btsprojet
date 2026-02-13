<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
     Route::get('\dasboard',[DashboardController::class, 'index'])
     ->middleware(['auth','verified'])
     ->name('dashboard');
     Route::patch('/users/{user}/role', [DashboardController::class, 'updateRole'])->name('admin.updateRole');
     Route::get('/admin/users',[DashboardController::class,'UsersList'])
     ->middleware(['auth','admin'])
     ->name('admin.user.list');



      require __DIR__.'/auth.php';