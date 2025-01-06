<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PersonalProfileController;
use App\Http\Controllers\DashboardController;
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

// Página inicial
Route::get('/', function () {
    return view('welcome');
});

// Dashboard (somente para usuários autenticados)
    Route::middleware(['auth'])->group(function () {
        // Substituindo a função anônima pela chamada ao controlador
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        // Outras rotas do seu projeto...
    });
    

    // Rotas de categorias
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    
    // Subcategorias
    Route::get('/subcategories/{categoryId}', [SubcategoryController::class, 'show'])->name('subcategories.show');
    
    // Materiais
    Route::prefix('materials')->group(function () {
        Route::get('/create', [MaterialController::class, 'create'])->name('materials.create'); // Formulário de criação de material
        Route::get('/', [MaterialController::class, 'index'])->name('materials.index'); // Listagem de materiais
        Route::get('/{id}', [MaterialController::class, 'show'])->name('materials.show'); // Exibição de material específico
        Route::post('/', [MaterialController::class, 'store'])->name('materials.store'); // Armazenamento de material
        Route::get('/{id}/download', [MaterialController::class, 'download'])->name('materials.download'); // Download de material
    });


// Rota para a página principal do perfil (sem ID, ou seja, para o perfil logado)
Route::get('/profile', [PersonalProfileController::class, 'main'])->name('personal.profile');

// Rota para mostrar um perfil específico, utilizando o ID
Route::get('/profile/{id}', [PersonalProfileController::class, 'show'])->name('profile.show');


// Requerendo as rotas de autenticação do Breeze (login, registro, etc)
require __DIR__.'/auth.php';
