<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\{appController,aboutController,contactController,messageController,protfolioController,serviceController,teamController};
use App\Http\Controllers\SslCommerzPaymentController;


// Website Route start
Route::prefix('/')->group(function () {
    Route::get('', [appController::class, 'Index'])->name('index');
});

// Website route end


// Admin route start
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Email verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profile', function () {
    // Only verified users may access this route...
})->middleware(['auth', 'verified']);

// Email verification end

Route::middleware(['auth', 'verified'])->group(function (){
    Route::prefix('/dashboard')->group(function (){
        Route::resource('/about', aboutController::class);
        Route::resource('/service', serviceController::class);

        // teams route starts
        Route::resource('/team', TeamController::class);
        Route::post('/team/store', [TeamController::class, 'store'])->name('teams.store');
        Route::get('team/{id}/status/change/{status}', [teamController::class, 'teamstatus'])->name('team.status.change');
        // teams category routes
        Route::post('/team',[teamController::class,'creatteamcategory'])->name('creatteamcategory');
        Route::get('teamcategory/{id}/status/change/{status}', [teamController::class, 'changestatus'])->name('category.status.change');
        Route::delete('teamcategory/{id}/delete', [teamController::class, 'category_delete'])->name('category.delete');
        // teams route ends

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



// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
