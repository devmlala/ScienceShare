<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        return Image::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        $image = Image::create([
            'url' => '/storage/' . $imagePath,
        ]);

        return response()->json($image, 201);
    }

    public function show($id)
    {
        return Image::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $image = Image::findOrFail($id);
        // Atualizar lógica aqui
    }

    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();
        
        return response()->json(null, 204);
    }
}