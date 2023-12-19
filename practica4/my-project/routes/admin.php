<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlumnatController;
use App\Http\Controllers\Admin\ProfessoratController;

    Route::middleware(['admin_db'])->group(function() {
        Route::post('/usuaris', [AdminController::class, 'usuaris'])->name('usuaris');

        Route::get('/usuaris', [AdminController::class, 'usuaris2'])->name('usuaris2');

        Route::get('/centres', [AdminController::class, 'centres'])->name('centres');

        Route::get('/alumnatOld', [AdminController::class, 'alumnat'])->name('alumnatOld');

        Route::get('/professorat', [AdminController::class, 'professorat'])->name('professorat');

        Route::get('/alumnat', [AlumnatController::class, 'index'])->name('alumnat');

        Route::get('/addAlumnat', [AlumnatController::class, 'create'])->name('createAlumnat');

        Route::get('/editAlumnat/{id}', [AlumnatController::class, 'edit'])->name('editAlumnat');

        Route::post('/storeAlumnat', [AlumnatController::class, 'store'])->name('storeAlumnat');

        Route::post('/updateAlumnat/{id}', [AlumnatController::class, 'update'])->name('updateAlumnat');

        Route::get('/deleteAlumnat/{id}', [AlumnatController::class, 'destroy'])->name('deleteAlumnat');

        Route::get('/showAlumnat', [AlumnatController::class, 'show'])->name('showAlumnat');


























        
        Route::get('/professorat', [ProfessoratController::class, 'index'])->name('professorat');
        
        Route::get('/createProfessorat', [ProfessoratController::class, 'create'])->name('createProfessorat');

        Route::post('/professorat', [ProfessoratController::class, 'store'])->name('storeProfessorat');
        
        Route::get('/editProfessorat/{id}', [ProfessoratController::class, 'edit'])->name('editProfessorat');
        
        Route::post('/updateProfessorat/{id}', [ProfessoratController::class, 'update'])->name('updateProfessorat');
        
        Route::get('/deleteProfessorat/{id}', [ProfessoratController::class, 'destroy'])->name('deleteProfessorat');

        Route::get('/showProfessorat/{id}',[ProfessoratController::class, 'show'])->name('showProfessorat');
    });


?>