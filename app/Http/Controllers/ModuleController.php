<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Profile;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function create(Profile $profile)
    {
        return view('modules.create', compact('profile'));
    }

    public function store(Request $request, Profile $profile)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'module_content' => 'required|string',
            'module_theme' => 'required|string|max:255',
        ]);

        $profile->modules()->create($validated);

        return redirect()->route('profile.index', $profile)->with('success', 'Módulo criado com sucesso!');
    }
}
