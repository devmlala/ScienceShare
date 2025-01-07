<?php
namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalProfileController extends Controller
{
    // Construtor para garantir que o usuário esteja autenticado antes de acessar o perfil
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the main profile page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function main()
    {
        // Verifique se o usuário está autenticado
        if (Auth::check()) {
            // Obter o perfil do usuário logado
            $profile = Auth::user(); // ou outro relacionamento se necessário
            // Obter os materiais associados ao perfil ou ao usuário
            // Supondo que você tenha um relacionamento entre o perfil/usuário e os materiais
            $materials = Auth::user()->materials;  // Ajuste se necessário, conforme seu modelo

            // Passar os dados para a view
            return view('personal.profile-main', compact('profile', 'materials'));
        }

        // Redirecionar para a página de login caso o usuário não esteja autenticado
        return redirect()->route('login');
    }


    /**
     * Exibe um perfil específico com base no ID
     */
    public function show($id)
    {
        $profile = Profile::with('modules')->findOrFail($id);

        return view('personal.profile', compact('profile'));
    }

    // Outros métodos permanecem sem alterações até que sejam necessários
    public function create()
    {
    }
    public function store(Request $request)
    {
    }
    public function edit(Profile $profile)
    {
    }
    public function update(Request $request, Profile $profile)
    {
    }
    public function destroy(Profile $profile)
    {
    }
}
