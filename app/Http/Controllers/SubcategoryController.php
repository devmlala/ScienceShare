<?php
namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index()
    {
        // Carrega todas as subcategorias com os materiais relacionados
        $subcategories = Subcategory::with('materials')->get();

        // Retorna a view principal (layouts.app) com todas as subcategorias
        return view('layouts.layout', compact('subcategories'));
    }
    public function show($id)
    {
        // Carrega a subcategoria com 
        $subcategory = Subcategory::with('materials')->findOrFail($id);
        //dd($subcategory); -> mostra os materials em relations  
        // Retorna a view passando a subcategoria e seus materiais
        return view('subcategories.show', compact('subcategory'));
    }
}
