<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThreadController;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShowThread;
use App\Models\Thread;

Route::get('/',\App\Livewire\ShowThreads::class)->middleware(['auth'])->name('dashboard');
// Route::get('/thread/{thread}',\App\Livewire\ShowThreads::class)->middleware(['auth'])->name('thread');
Route::get('/thread/{thread}', ShowThread::class)->middleware(['auth'])->name('thread');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('threads', ThreadController::class)->except([
        'show', 'index', 'destroy'
    ]);
});

require __DIR__.'/auth.php';