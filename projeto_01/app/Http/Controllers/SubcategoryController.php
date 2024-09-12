<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function show($id)
    {
        // Encontre a subcategoria pelo ID e carregue os materiais relacionados
        $subcategory = SubCategory::with('materials')->findOrFail($id);

        // Passe a variável subcategory para a view
        return view('subcategories.show', compact('subcategory'));
    }
}
