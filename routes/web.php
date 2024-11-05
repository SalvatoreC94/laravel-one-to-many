<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rotta per la pagina di welcome pubblica
Route::get('/', [MainController::class, 'index'])->name('home');

// Rotte protette per l'admin, accessibili solo dopo il login
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard che reindirizza alla pagina dei progetti
    Route::get('/dashboard', [AdminMainController::class, 'dashboard'])->name('dashboard');

    // CRUD per i progetti del portfolio
    Route::resource('projects', ProjectController::class);
});

// Rotte di autenticazione
require __DIR__.'/auth.php';
