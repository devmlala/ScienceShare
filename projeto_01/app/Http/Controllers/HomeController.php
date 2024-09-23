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

    public function index(Request $request)
    {

        // Obtém o termo de busca da requisição
        $search = $request->input('search');

        // Busca por categorias e subcategorias com base no termo de busca
        $categories = Category::with(['subcategories' => function($query) use ($search) {
            // Filtro nas subcategorias se o termo de busca estiver presente
            if ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            }
        }])
        ->when($search, function ($query) use ($search) {
            // Filtro nas categorias se o termo de busca estiver presente
            $query->where('name', 'like', '%' . $search . '%');
        })
        ->get();


        return view('home', [
            'categories' => $categories,
            'search' => $search,
        ]);


    }

}
