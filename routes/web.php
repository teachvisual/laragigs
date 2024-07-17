<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\AdminController;


//ADMIN

Route::prefix('admin')->group(function () {

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/listings', [AdminController::class, 'listings'])->name('admin.listings');


        Route::prefix('users')->group(function () {
            Route::get('/', [AdminController::class, 'users'])->name('admin.users');
            Route::put('/update-email/{user}', [AdminController::class, 'updateEmail'])->name('admin.updateEmail');
            Route::put('/update-password/{user}', [AdminController::class, 'updatePassword'])->name('admin.updatePassword');
            Route::get('/{user}/edit', [AdminController::class, 'edit'])->name('admin.edit');
        });
    });
});

//LISTINGS

Route::get('/', [ListingController::class, 'index'])->name('home');

Route::prefix('listings')->group(function () {

    Route::get('/create', [ListingController::class, 'create'])->name('listing.create')->middleware('auth');
    Route::post('/', [ListingController::class, 'store'])->name('listing.store')->middleware('auth');
    Route::get('/manage', [ListingController::class, 'manage'])->name('listing.manage');

    Route::middleware('auth')->group(function () {
        Route::put('/{listing}', [ListingController::class, 'update'])->name('listing.update');
        Route::get('/{listing}/edit', [ListingController::class, 'edit'])->name('listing.edit');
        Route::delete('/{listing}', [ListingController::class, 'destroy'])->name('listing.destroy');
    });

    Route::get('/{listing}', [ListingController::class, 'show'])->name('listing.show');
});



//USERS

Route::prefix('users')->group(function () {

    Route::middleware('guest')->group(function () {
        Route::get('/register', [UserController::class, 'create'])->name('users.register');
        Route::get('/login', [UserController::class, 'login'])->name('login');
        Route::post('/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
    });

    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
