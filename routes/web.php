<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProfileInformationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, "index"])->name("site.index");
Route::post('/', [SiteController::class, "store"])->name("site.index");

Route::middleware(['auth'])->prefix('dashboard/projetos')->group(function () {
    Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/adicionar', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/adicionar', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/atualizar/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/atualizar/{id}', [ProjectController::class, 'update'])->name('projects.update');
    Route::get('/detalhes/{id}', [ProjectController::class, 'details'])->name('projects.details');
    Route::get('/deletar/{id}', [ProjectController::class, 'delete'])->name('projects.delete');
    Route::delete('/deletar/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
});

Route::middleware(['auth'])->prefix('dashboard/servicos')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/adicionar', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/adicionar', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/atualizar/{id}', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/atualizar/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::get('/detalhes/{id}', [ServiceController::class, 'details'])->name('services.details');
    Route::get('/deletar/{id}', [ServiceController::class, 'delete'])->name('services.delete');
    Route::delete('/deletar/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');
});

Route::middleware(['auth'])->prefix('dashboard/informacoes-do-perfil')->group(function () {
    Route::get('/', [ProfileInformationController::class, 'index'])->name('profile_informations.index');
    Route::get('/adicionar', [ProfileInformationController::class, 'create'])->name('profile_informations.create');
    Route::post('/adicionar', [ProfileInformationController::class, 'store'])->name('profile_informations.store');
    Route::get('/atualizar/{id}', [ProfileInformationController::class, 'edit'])->name('profile_informations.edit');
    Route::put('/atualizar/{id}', [ProfileInformationController::class, 'update'])->name('profile_informations.update');
    Route::get('/detalhes/{id}', [ProfileInformationController::class, 'details'])->name('profile_informations.details');
});

Route::middleware(['auth'])->prefix('dashboard/mensagens')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('detalhes/{id}', [ContactController::class, 'details'])->name('contacts.details');
    Route::get('deletar/{id}', [ContactController::class, 'delete'])->name('contacts.delete');
    Route::delete('deletar/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
//     Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
// });

// Route::get('/dashboard/projects', [ProjectController::class, "index"])
//     ->middleware(['auth', 'verified'])
//     ->name('projects.index');
