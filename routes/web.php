<?php

use App\Http\Controllers\ProfileController;
<<<<<<< HEAD
use App\Http\Controllers\KomikController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\KaryaController;
use App\Http\Controllers\NovelController;
use App\Models\Karya;
=======
use Illuminate\Support\Facades\Redirect;
>>>>>>> main
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
    // return view('welcome');
    return view('home.index');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('home.index');
<<<<<<< HEAD
})->middleware(['auth', 'verified'])->name('home');

#User
// Route::group([
//     'as' => 'user',
//     'prefix' =>'user',
//     'controller' => ProfileController::class,
// ],function () {
//     Route::get('/profiles', [ProfileController::class, 'index'])->name('profile.index');
//     Route::get('/profiles/edit', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
=======
})->middleware(['auth', 'verified'])->name('dashboard');
>>>>>>> main

Route::middleware('auth')->group(function () {
    Route::get('/profiles', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profiles/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profiles/{user}/following', [FollowingController::class, 'index'])->name('following.index');
    Route::post('/profiles/{user}', [FollowingController::class, 'store'])->name('following.store');
    Route::get('/profiles/{user}/follower', [FollowingController::class, 'follower'])->name('profile.follower');
});

<<<<<<< HEAD
#Karya
Route::get('/create/karya',[KaryaController::class, 'index'])->name('createkarya');

Route::get('/home', [KaryaController::class, 'index'])->name('home');

#Home
// Route::get('/home', [HomeController::class, 'index'])->name('home');

#Novel
Route::get('/novel', [NovelController::class, 'index'])->name('novel');

#Komik
// Tampil Komik
Route::get('/komik', [KomikController::class, 'index'])->name('komik');

#Following
// Tampil Following
Route::get('/following', [FollowingController::class, 'index'])->name('following');

Route::get('logout', function ()
{
=======
Route::get('logout', function () {
>>>>>>> main
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

<<<<<<< HEAD
require __DIR__ . '/auth.php';
=======
require __DIR__ . '/auth.php';
>>>>>>> main
