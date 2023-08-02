<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Redirect;
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
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('home.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profiles/user/{user:username}', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profiles/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::post('/profiles/follow', [FollowingController::class, 'store'])->name('follow');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/profiles', [CommentController::class, 'index'])->name('profile.index');
});

Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

require __DIR__ . '/auth.php';
