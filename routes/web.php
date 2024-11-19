<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CienciaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PersonalProfileController;

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

// Define a rota para a página inicial
Route::get('/', [HomeController::class, 'index'])->name('home');



//Categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');


//Subcategories
Route::get('/subcategories/{id}', [SubcategoryController::class, 'show'])->name('subcategories.show');
Route::get('/subcategories', [SubcategoryController::class, 'index']);


#Materials
Route::get('/materials/create',[MaterialController::class, 'create'])->name('materials.create');
Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');
Route::post('materials', [MaterialController::class, 'store'])->name('materials.store');
Route::get('/materials/download/{id}', [MaterialController::class, 'download'])->name('materials.download');
Route::get('/materials/{id}', [MaterialController::class, 'show'])->name('material.show');


#Perfil pessoal
Route::get('/profile', [PersonalProfileController::class, 'main']);
Route::get('/profile/content', [PersonalProfileController::class, 'index'])->name('profile.index');


