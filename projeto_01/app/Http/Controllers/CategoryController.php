<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Buscar todas as categorias com suas subcategorias
        $categories = Category::with('subcategories')->get();

        return view('categories.index', compact('categories'));
    }
}
