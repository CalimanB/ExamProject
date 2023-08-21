<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
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

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/book', function () {
//     return view('book');
// })->middleware(['auth', 'verified'])->name('book');

Route::get('/book', [BookController::class,'index'])->middleware(['auth', 'verified'])->name('book');
Route::get('/book/create', [BookController::class,'create'])->middleware(['auth', 'verified'])->name('book.create');
Route::post('/book', [BookController::class,'store'])->middleware(['auth', 'verified'])->name('book.store');
Route::get('/book/{book}/edit', [BookController::class,'edit'])->middleware(['auth', 'verified'])->name('book.edit');
Route::put('/book/{book}/update', [BookController::class,'update'])->middleware(['auth', 'verified'])->name('book.update');

// Route::get('/subscriber', function () {
//     return view('subscriber');
// })->middleware(['auth', 'verified'])->name('subscriber');

Route::get('/subscriber', [SubscriberController::class,'index'])->middleware(['auth', 'verified'])->name('subscriber');
Route::get('/subscriber/create', [SubscriberController::class,'create'])->middleware(['auth', 'verified'])->name('subscriber.create');
Route::post('/subscriber', [SubscriberController::class,'store'])->middleware(['auth', 'verified'])->name('subscriber.store');
Route::get('/subscriber/{subscriber}/edit', [SubscriberController::class,'edit'])->middleware(['auth', 'verified'])->name('subscriber.edit');
Route::put('/subscriber/{subscriber}/update', [SubscriberController::class,'update'])->middleware(['auth', 'verified'])->name('subscriber.update');

Route::get('/inventory', function () {
    return view('inventory');
})->middleware(['auth', 'verified'])->name('inventory');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
