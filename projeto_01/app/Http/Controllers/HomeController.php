<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Exibe a página inicial com subcategorias e materiais.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::with('subcategories')->get(); // Busca todas as subcategorias com materiais
        
        return view('home', compact('categories'));
    }
}
