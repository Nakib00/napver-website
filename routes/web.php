<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\{appController, aboutController, contactController, messageController, protfolioController, serviceController, teamController, settingController};
use App\Http\Controllers\SslCommerzPaymentController;


// Website Route start
Route::prefix('/')->group(function () {
    Route::get('', [appController::class, 'Index'])->name('index');
    Route::post('/message', [appController::class, 'store'])->name('message.store');
    Route::get('/teams',[appController::class, 'teams'])->name('teams.index');
    Route::get('/protfolio',[appController::class, 'protfolio'])->name('protfolio.page');
    Route::get('/details/{id}',[appController::class, 'protshow'])->name('protshow.page');
    Route::get('/careers',[appController::class, 'careers'])->name('careers.page');
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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        // About routes start
        Route::resource('/about', aboutController::class);
        // About routes end

        // Service route starts
        Route::resource('/service', serviceController::class);
        Route::get('service/{id}/status/change/{status}', [serviceController::class, 'changestatus'])->name('service.status.change');
        // Service route ends

        // teams route starts
        Route::resource('/team', TeamController::class);
        Route::post('/team/store', [TeamController::class, 'store'])->name('teams.store');
        // teams category routes
        Route::post('/team', [teamController::class, 'creatteamcategory'])->name('creatteamcategory');
        Route::get('teamcategory/{id}/status/change/{status}', [teamController::class, 'changestatus'])->name('teamcategory.status.change');
        Route::get('team/{id}/status/change/{status}', [teamController::class, 'teamstatus'])->name('team.status.change');
        Route::delete('teamcategory/{id}/delete', [teamController::class, 'category_delete'])->name('tcategory.delete');
        // teams route ends

        // protfolio routes starting
        Route::resource('/protfolio', protfolioController::class);
        Route::post('/store', [protfolioController::class, 'store'])->name('protfolio.store');

        // protfolio  category routes
        Route::post('/protfolio', [protfolioController::class, 'creatcategory'])->name('creatcategory');
        Route::get('protfoliocategory/{id}/status/change/{status}', [protfolioController::class, 'changestatus'])->name('procategory.status.change');
        Route::delete('protfoliocategory/{id}/delete', [protfolioController::class, 'category_delete'])->name('pcategory.delete');
        // protfolio  route ends

        // protfolio routes ending
        Route::resource('/contact', contactController::class);

        Route::resource('/setting', settingController::class);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth::routes(['register' => false]);
// Admin route end
require __DIR__ . '/auth.php';

