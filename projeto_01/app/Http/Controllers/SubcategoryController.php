<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function show($id)
{
    $subcategory = Subcategory::with('materials')->findOrFail($id);

    return view('subcategories.show', compact('subcategory'));
}

}
