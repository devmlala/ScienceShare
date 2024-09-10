<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CienciaController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\MaterialController;

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
Route::get('/', [HomeController::class, 'index']);


// Route for the climatologia index page
Route::get('/ciencias', function () {
    return view('ciencias.index');
});

// Route for the climatologia page
Route::get('/ciencias/climatologia', function () {
    return view('ciencias.climatologia');
});


//ciencias
Route::get('/ciencias', [CienciaController::class, 'index'])->name('ciencias.index');






Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');



Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/subcategories/{id}', [SubcategoryController::class, 'show']);












