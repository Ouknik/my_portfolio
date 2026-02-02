<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminPortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.home');
Route::post('/contact', [PortfolioController::class, 'sendMessage'])->name('portfolio.contact');
Route::get('/cv', [PortfolioController::class, 'downloadCV'])->name('portfolio.cv');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Routes d'administration du portfolio
    Route::prefix('admin/portfolio')->name('admin.portfolio.')->group(function () {
        Route::get('/', [AdminPortfolioController::class, 'index'])->name('dashboard');
        
        // Gestion des projets
        Route::get('/projects', [AdminPortfolioController::class, 'projects'])->name('projects');
        Route::get('/projects/create', [AdminPortfolioController::class, 'createProject'])->name('projects.create');
        Route::post('/projects', [AdminPortfolioController::class, 'storeProject'])->name('projects.store');
        Route::get('/projects/{project}/edit', [AdminPortfolioController::class, 'editProject'])->name('projects.edit');
        Route::put('/projects/{project}', [AdminPortfolioController::class, 'updateProject'])->name('projects.update');
        Route::delete('/projects/{project}', [AdminPortfolioController::class, 'destroyProject'])->name('projects.destroy');
        
        // Gestion des messages
        Route::get('/messages', [AdminPortfolioController::class, 'messages'])->name('messages');
        Route::get('/messages/{message}', [AdminPortfolioController::class, 'showMessage'])->name('messages.show');
        Route::delete('/messages/{message}', [AdminPortfolioController::class, 'destroyMessage'])->name('messages.destroy');
    });
});
