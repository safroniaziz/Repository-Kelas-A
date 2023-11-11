<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(MahasiswaController::class)
        ->prefix('/manajemen_mahasiswa')
        ->group(function(){
            Route::get('/', 'index')->name('manajemen_mahasiswa.index');
            Route::get('/create', 'create')->name('manajemen_mahasiswa.create');
            Route::post('/post', 'post')->name('manajemen_mahasiswa.post');
            Route::delete('/{mahasiswa}/delete', 'delete')->name('manajemen_mahasiswa.delete');
        });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
