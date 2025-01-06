<?php
namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::with('materials')->get();
        return view('layouts.layout', compact('subcategories'));
    }

    public function show($id)
    {
        $subcategory = Subcategory::with('materials')->findOrFail($id);
        return view('subcategories.show', compact('subcategory'));
    }

    public function showMaterial($id)
    {
        $material = Material::findOrFail($id);
        return view('materials.show', compact('material'));
    }
}
