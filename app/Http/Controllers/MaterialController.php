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
        // Verifica se há um arquivo sendo enviado
        if ($request->hasFile('file')) {
            // Salva o arquivo na pasta 'materials' no armazenamento local (storage/app/public/materials)
            $filePath = $request->file('file')->store('materials', 'public');
            $requestData = $request->validated();
            $requestData['fonte_url'] = $filePath; // Salva o caminho do arquivo na coluna 'fonte_url'
        } else {
            $requestData = $request->validated();
        }

        // Criação do material
        $material = Material::create($requestData);

        // Associar subcategorias ao material, se existirem
        if ($request->has('subcategories')) {
            $material->subcategories()->attach($request->subcategories);
        }

        return redirect()->route('materials.create')->with('success', 'Material adicionado com sucesso!');
    }





    public function download($id)
{
    $material = Material::findOrFail($id);

    // Use 'fonte_url' como o campo que armazena o caminho do arquivo
    $pathToFile = storage_path('app/public/' . $material->fonte_url);

    if (file_exists($pathToFile)) {
        return response()->download($pathToFile);
    } else {
        return back()->with('error', 'Arquivo não encontrado.');
    }
}






}
