<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Material;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMaterialRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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
        // Buscar o material com suas subcategorias
        $material = Material::with('subcategories')->findOrFail($id);
        return view('materials.show', compact('material'));
    }

    public function create()
    {
        // Obter todas as subcategorias para o formulário
        $subcategories = Subcategory::all();
        return view('materials.create', compact('subcategories'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048', // Adicione os formatos permitidos
        ]);

        $file = $request->file('file');
        $path = 'materials/';

        // Manipulação de imagem
        if (in_array($file->getClientOriginalExtension(), ['jpeg', 'jpg', 'png'])) {
            $image = Image::make($file)->resize(800, 600, function ($constraint) {
                $constraint->aspectRatio();
            });
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $image->save(public_path($path . $filename));
        } else {
            // Para outros arquivos (como PDF)
            $filename = $file->getClientOriginalName();
            $file->move(public_path($path), $filename);
        }

        // Salvar informações no banco de dados
        $material = new Material();
        $material->title = $request->title;
        $material->description = $request->description;
        $material->file_path = $filename;
        $material->save();

        return redirect()->back()->with('success', 'Material adicionado com sucesso!');
    }


    public function download($id)
    {
        // Buscar o material
        $material = Material::findOrFail($id);

        // Use 'fonte_url' como o campo que armazena o caminho do arquivo
        $pathToFile = storage_path('app/public/' . $material->fonte_url);

        // Verifica se o arquivo existe e retorna para download
        if (file_exists($pathToFile)) {
            return response()->download($pathToFile);
        } else {
            // Caso o arquivo não seja encontrado
            return back()->with('error', 'Arquivo não encontrado.');
        }
    }
}
