<?php

use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\AcceuilControlleur;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\CategorieController;
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

Route::get('/',[AcceuilControlleur::class, 'index'])->name('index');
Route::get('/catannonces/{category}', [AcceuilControlleur::class, 'findByCategoty'])->name('categorie.annonce');


Route::prefix('admin')->name("admin.")->group(function () {
Route::get('/indexannonces', [AnnonceController::class, 'indexannonces'])
->middleware(['auth', 'verified'])->name('indexannonces');
Route::get('/findByCategoty/{category}', [AnnonceController::class, 'findByCategoty'])
->middleware(['auth', 'verified'])->name('findByCategoty');
Route::get('/blog', [AnnonceController::class, 'index'])
->middleware(['auth', 'verified'])->name('blog');

Route::get('/createanonce', function () {
    return view('admin.createanonce');
})->middleware(['auth', 'verified'])->name('createanonce');
Route::get('/timeline', function () {
    return view('admin.timeline');
})->middleware(['auth', 'verified'])->name('timeline');
Route::get('/forms', function () {
    return view('admin.forms');
})->middleware(['auth', 'verified'])->name('forms');
Route::get('/typography', function () {
    return view('admin.typography');
})->middleware(['auth', 'verified'])->name('typography');;
Route::get('/bootstrap-elements', function () {
    return view('admin.bootstrap-elements');
})->middleware(['auth', 'verified'])->name('bootstrap-elements');;
Route::get('/bootstrap-grid', function () {
    return view('admin.bootstrap-grid');
})->middleware(['auth', 'verified'])->name('bootstrap-grid');;


Route::get('/dashboard', [CategorieController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
});
Route::get('/dashboard' ,[CategorieController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
Route::get('/categories2', [CategorieController::class, 'index2'])->name('categories.index2');
Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');
Route::get('/categories/{categorie}', [CategorieController::class, 'show'])->name('categories.show');
Route::get('/categories/{categorie}/edit', [CategorieController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{categorie}', [CategorieController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategorieController::class, 'destroy'])->name('categories.destroy');


Route::get('/annonces', [AnnonceController::class, 'index'])->name('annonces.index');
Route::get('/annonces2', [AnnonceController::class, 'index2'])->name('annonces.index2');
Route::get('/annonces/create', [AnnonceController::class, 'create'])->name('annonces.create');
Route::post('/annonces', [AnnonceController::class, 'store'])->name('annonces.store');
Route::get('/annonces/{annonce}', [AnnonceController::class, 'show'])->name('annonces.show');
Route::get('/annonces/{annonce}/edit', [AnnonceController::class, 'edit'])->name('annonces.edit');
Route::put('/annonces/{annonce}', [AnnonceController::class, 'update'])->name('annonces.update');
Route::delete('/annonces/{annonce}', [AnnonceController::class, 'destroy'])->name('annonces.destroy');
Route::get('/annonces/{category}', [AnnonceController::class, 'findByCategoty'])->name('annonces.findByCategoty');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/developpe', function () {
    return view('developpe');
})->name('developpe');
require __DIR__.'/auth.php';
