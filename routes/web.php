<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeListController; 
use Illuminate\Support\Facades\Input;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//home
Route::get('/', [AnimeListController::class, 'index']);

//dashboard sample
Route::get('dashboard', [AnimeListController::class, 'dashboard']);

//login
// Route::get('login', [AnimeListController::class, 'index'])->name('login');

//submit login
Route::post('postlogin', [AnimeListController::class, 'login'])->name('postlogin');

//register
Route::get('signup', [AnimeListController::class, 'signup'])->name('register-user');

//submit registration
Route::post('postsignup', [AnimeListController::class, 'signupsave'])->name('postsignup');

//logout
Route::get('signout', [AnimeListController::class, 'signout'])->name('signout');


//upload
Route::post('/saveAnimeRoute', [AnimeListController::class, 'saveAnime'])->name('saveAnime');

//edit
Route::get('/edit/{id}', [AnimeListController::class, 'edit']);

//update
Route::put('/update/{id}', [AnimeListController::class, 'update']);

//delete
Route::get('/delete/{id}', [AnimeListController::class, 'delete']);

//mark complete
Route::get('/mark/{id}', [AnimeListController::class, 'mark']);

//watched filter
Route::get('/watched', [AnimeListController::class, 'watched']);
Route::get('/waiting', [AnimeListController::class, 'waiting']);

//sort
Route::get('/genre/{genre}', [AnimeListController::class, 'genre']);

//search 
Route::get('/search', [AnimeListController::class, 'search'])->name('search-item');