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

use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/profil', [FrontendController::class, 'profile'])->name('profile');
Route::get('/layanan', [FrontendController::class, 'services'])->name('services');
Route::get('/ppid', [FrontendController::class, 'ppid'])->name('ppid');
Route::get('/berita', [FrontendController::class, 'news'])->name('news');
Route::get('/berita/{slug}', [FrontendController::class, 'newsDetail'])->name('news.detail');
Route::get('/galeri', [FrontendController::class, 'galleries'])->name('galleries');
Route::get('/galeri/{slug}', [FrontendController::class, 'galleryDetail'])->name('galleries.detail');
Route::get('/dokumen', [FrontendController::class, 'documents'])->name('documents');
Route::get('/kontak', [FrontendController::class, 'contact'])->name('contact');
Route::get('/halaman/{slug}', [FrontendController::class, 'page'])->name('page');

Route::get('/layanan/{slug}', [FrontendController::class, 'serviceDetail'])->name('services.detail');
Route::get('/agenda', [FrontendController::class, 'agendas'])->name('agendas');
Route::get('/skm', [FrontendController::class, 'skm'])->name('skm');
Route::get('/struktur-organisasi', [FrontendController::class, 'officials'])->name('officials');

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    
    Route::middleware('role:Administrator')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('news', NewsController::class);
        Route::get('news/trash', [NewsController::class, 'trash'])->name('news.trash');
        Route::post('news/{id}/restore', [NewsController::class, 'restore'])->name('news.restore');
        Route::delete('news/{id}/force-delete', [NewsController::class, 'forceDelete'])->name('news.forceDelete');
        Route::resource('galleries', GalleryController::class);
        Route::get('galleries/trash', [GalleryController::class, 'trash'])->name('galleries.trash');
        Route::post('galleries/{id}/restore', [GalleryController::class, 'restore'])->name('galleries.restore');
        Route::delete('galleries/{id}/force-delete', [GalleryController::class, 'forceDelete'])->name('galleries.forceDelete');
        Route::resource('publications', PublicationController::class);
        Route::get('publications/trash', [PublicationController::class, 'trash'])->name('publications.trash');
        Route::post('publications/{id}/restore', [PublicationController::class, 'restore'])->name('publications.restore');
        Route::delete('publications/{id}/force-delete', [PublicationController::class, 'forceDelete'])->name('publications.forceDelete');
        Route::resource('programs', ProgramController::class);
        Route::get('programs/trash', [ProgramController::class, 'trash'])->name('programs.trash');
        Route::post('programs/{id}/restore', [ProgramController::class, 'restore'])->name('programs.restore');
        Route::delete('programs/{id}/force-delete', [ProgramController::class, 'forceDelete'])->name('programs.forceDelete');
        Route::resource('services', ServiceController::class);
        Route::get('services/trash', [ServiceController::class, 'trash'])->name('services.trash');
        Route::post('services/{id}/restore', [ServiceController::class, 'restore'])->name('services.restore');
        Route::delete('services/{id}/force-delete', [ServiceController::class, 'forceDelete'])->name('services.forceDelete');
        Route::resource('ppid', PpidController::class);
        Route::resource('pages', PageController::class);
        Route::resource('settings', SettingController::class)->only(['index', 'edit', 'update']);
        
        Route::get('menus', [\App\Http\Controllers\Admin\MenuController::class, 'index'])->name('menus.index');
        Route::resource('menu-items', \App\Http\Controllers\Admin\MenuItemController::class)
            ->parameters(['menu-items' => 'item'])
            ->names('menus.items')
            ->except(['index', 'show']);
        
        Route::resource('departments', \App\Http\Controllers\Admin\DepartmentController::class);
        Route::resource('positions', \App\Http\Controllers\Admin\PositionController::class);
        Route::resource('officials', \App\Http\Controllers\Admin\OfficialController::class);
        Route::resource('agendas', \App\Http\Controllers\Admin\AgendaController::class);
        Route::resource('skm-scores', \App\Http\Controllers\Admin\SkmScoreController::class);

        Route::post('media/upload', [\App\Http\Controllers\Admin\MediaController::class, 'upload'])->name('media.upload');
    });
    });
});
