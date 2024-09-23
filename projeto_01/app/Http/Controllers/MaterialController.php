<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Material;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMaterialRequest;

class MaterialController extends Controller
{
    public function index()
    {
        // Buscar todas as subcategorias com seus respectivos materiais
        $subcategories = Subcategory::with('materials')->get();

        // Retornar a view passando a variável subcategories
        return view('materials.index', compact('subcategories'));
    }


    public function create()
    {
        $subcategories = Subcategory::all(); // Obter todas as subcategorias
        return view('materials.create', compact('subcategories'));
    }

    public function store(StoreMaterialRequest $request)
    {
        // Criação do material
        $material = Material::create($request->validated());

        // Associar subcategorias ao material
        $material->subcategories()->attach($request->subcategories);

        return redirect()->route('materials.create')->with('success', 'Material adicionado com sucesso!');
    }




}
