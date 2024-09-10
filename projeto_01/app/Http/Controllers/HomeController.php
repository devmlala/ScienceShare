<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
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
        $subcategories = Subcategory::with('materials')->get(); // Busca todas as subcategorias com materiais
        
        return view('subcategories.show', compact('subcategories'));
    }
}
