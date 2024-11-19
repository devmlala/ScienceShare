<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Material;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMaterialRequest;
use Illuminate\Support\Facades\Storage;


class MaterialController extends Controller
{
    public function index()
    {
        // Buscar todas as subcategorias com seus respectivos materiais
        $subcategories = Subcategory::with('materials')->get();

        // Retornar a view passando a variável subcategories
        return view('materials.index', compact('subcategories'));
    }

    public function show($id)
    {
        $material = Material::with('subcategories')->findOrFail($id);
        return view('materials.show', compact('material'));
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



    public function download($id)
    {
        $material = Material::findOrFail($id);

        // Substitua "path_to_pdf" pelo campo que armazena o caminho do PDF no banco de dados
        $pathToFile = storage_path('app/public/' . $material->path_to_pdf);

        if (file_exists($pathToFile)) {
            return response()->download($pathToFile);
        } else {
            return back()->with('error', 'Arquivo não encontrado.');
        }
    }




}
