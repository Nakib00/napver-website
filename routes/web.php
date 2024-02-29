<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{appController,aboutController,contactController,messageController,protfolioController,serviceController,teamController};


// Website Route start
Route::prefix('/')->group(function () {
    Route::get('', [appController::class, 'Index'])->name('index');
});

// Website route end


// Admin route start
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'verified'])->group(function (){
    Route::prefix('/dashboard')->group(function (){
        Route::resource('/about', aboutController::class);
        Route::resource('/service', serviceController::class);
        Route::resource('/team', teamController::class);
        Route::resource('/protfolio', protfolioController::class);
        Route::resource('/contact', contactController::class);
        Route::resource('/message', messageController::class);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Admin route end
require __DIR__.'/auth.php';
