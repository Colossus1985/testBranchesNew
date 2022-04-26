<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\livreControlleur;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('livres', livreControlleur::class);

Route::get('/', [livreControlleur::class, 'index'])->name('home');
Route::get('home', [livreControlleur::class, 'getAll'])->name('livres');
Route::get('createBook', [livreControlleur::class, 'createBook'])->name('createBook');
// Route::post('storeBook', [livreControlleur::class, 'storeBook'])->name('storeBook');