<?php

use App\Http\Controllers\Guest\HomeController as GuestHomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TypeController;

use App\Http\Controllers\ProfileController;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Support\Facades\Route;

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

// Guest Route
Route::prefix('/')->name('guest.')->group(function () {
    Route::get('/', [GuestHomeController::class, 'index'])->name('home');
});

// Admin Route
Route::prefix('/admin')->middleware('auth', 'verified')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');



    // ################## PROJECTS ##################
    // Trash route
    Route::get('/projects/trash', [ProjectController::class, 'trash'])->name('projects.trash');

    // Restore Projects Route 
    Route::patch('/projects/{project}/restore', [ProjectController::class, 'restore'])->name('projects.restore');

    // Drop Projects Route 
    Route::delete('/projects/{project}/drop', [ProjectController::class, 'drop'])->name('projects.drop');

    // Admin Projects routes
    Route::resource('projects', ProjectController::class);



    // ################## TYPES ##################
    // Types Trash route
    Route::get('/types/trash', [TypeController::class, 'trash'])->name('types.trash');

    // Types Route
    Route::resource('/types', TypeController::class);

    // Types Restore Projects Route 
    Route::patch('/types/{type}/restore', [TypeController::class, 'restore'])->name('types.restore');

    // Types Drop Projects Route 
    Route::delete('/types/{type}/drop', [TypeController::class, 'drop'])->name('types.drop');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::resource('admin/technologies', App\Http\Controllers\Admin\TechnologyController::class, ['as' => 'admin']);