<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EntreeController;
use App\Http\Controllers\SortieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('categorie/create', function () {
    return view('categorie.create');
})->middleware('auth');
Route::resource('Categorie', CategorieController::class)->middleware('auth');
Route::resource('Produit', ProduitController::class)->middleware('auth');
Route::resource('Role', RoleController::class)->middleware('auth');
Route::resource('Entree', EntreeController::class)->middleware('auth');
Route::resource('Sortie', SortieController::class)->middleware('auth');