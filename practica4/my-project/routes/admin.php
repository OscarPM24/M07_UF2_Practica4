<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlumnatController;

    Route::middleware(['admin_db'])->group(function() {
        Route::post('/usuaris', [AdminController::class, 'usuaris'])->name('usuaris');

        Route::get('/usuaris', [AdminController::class, 'usuaris2'])->name('usuaris2');

        Route::get('/centres', [AdminController::class, 'centres'])->name('centres');

        Route::get('/alumnat', [AlumnatController::class, 'index'])->name('alumnat');

        Route::get('/professorat', [AdminController::class, 'professorat'])->name('professorat');

        Route::get('/addAlumnat', [AlumnatController::class, 'create'])->name('createAlumnat');

        Route::post('/alumnat', [AlumnatController::class, 'store'])->name('alumnatCreate');
    });


?>