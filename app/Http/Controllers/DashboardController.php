<?php
namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;

class DashboardController extends Controller
{
    public function index()
    {
        // Recupera os materiais do usuário logado
        $materials = Material::where('user_id', Auth::id())->get();
        $user = Auth::user();
        
        // Recupera o 'image_path' com o id 5
        $img = Image::find(5); // Recupera o registro com id 5

        // Verifica se a imagem foi encontrada
        if (!$img || !$img->image_path) {
            // Caso a imagem não exista ou não tenha um caminho, usa uma imagem padrão
            $imgUrl = 'https://via.placeholder.com/150'; // Imagem padrão
        } else {
            $imgUrl = $img->image_path; // Caso a imagem exista, usa o caminho registrado
        }

        // Retorna a view com os materiais e a URL da imagem
        return view('dashboard', compact('materials', 'user', 'imgUrl'));
    }
}
