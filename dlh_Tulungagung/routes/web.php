<?php

use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PpidController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')
        ->middleware(['permission:Dashboard.View']);

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('news', NewsController::class);
        Route::resource('galleries', GalleryController::class);
        Route::resource('publications', PublicationController::class);
        Route::resource('programs', ProgramController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('ppid', PpidController::class);
        Route::resource('pages', PageController::class);
        Route::resource('settings', SettingController::class)->only(['index', 'edit', 'update']);
    });
});
