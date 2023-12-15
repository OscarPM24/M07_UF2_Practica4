<?php

use App\Http\Controllers\Admin\CentresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


    Route::middleware(['admin_db'])->group(function() {
        Route::post('/usuaris', [AdminController::class, 'usuaris'])->name('usuaris');

        Route::get('/usuaris', [AdminController::class, 'usuaris2'])->name('usuaris2');

        Route::get('/centres', [AdminController::class, 'centres'])->name('centres');

        Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');

        Route::get('/professorat', [AdminController::class, 'professorat'])->name('professorat');

        Route::get('/indexCentre', [CentresController::class, 'index'])->name('indexCentres');

        Route::get('/createCentres', [CentresController::class, 'create'])->name('createCentre');

        Route::post('/storeCentres', [CentresController::class, 'store'])->name('storeCentre');

        Route::get('/showCentre', [CentresController::class, 'show'])->name('showCentre');

        Route::get('/editCentre/{id}', [CentresController::class, 'edit'])->name('editCentre');

        Route::put('/updateCentre', [CentresController::class, 'update'])->name('updateCentre');

        Route::get('/destroyCentre/{id}', [CentresController::class, 'destroy'])->name('destroyCentre');
    });


?>