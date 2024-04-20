<?php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TechnologyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get(
    'projects/trash/{id}',[ProjectController::class, 'trash']
    ) ->name('projects.trash')->middleware(['auth', 'verified']);

    Route::get(
        'technologies/trash/{id}',[TechnologyController::class, 'trash']
        ) ->name('technologies.trash')->middleware(['auth', 'verified']);
    




Route::resource('projects', ProjectController::class)->middleware(['auth', 'verified']);

Route::resource('technologies', TechnologyController::class)->middleware(['auth', 'verified']);













Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
