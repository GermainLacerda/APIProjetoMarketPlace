<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller{
    public function index(){
        $categories = Category::all();
        return response()->json($categories);
    }

    public function show ($id){
        $category = Category::find($id);
        if(!$category){
            return response()->json(['error'=>'Produto não encontrado'], 404);
        }
        return $category;
    }

    public function store (Request $request){
        $validated = $request->validate([
            'categoria' => 'required|string|max:255',
        ]);

        $category = Category::create($validated);

        return response()->json($category, 201);
    }

    public function update (Request $request, $id, ){
        $category = Category::find($id);
        if(!$category){
            response()->josin(['Error'=>'Produto não encontrado'], 404);
        }


        $validated = $request->validate([
            'categoria' => 'required|string|max:255',
        ]);

        $category->update($validated);

        return response()->json($category);
    }

    public function destroy($id){
        $category = Category::find($id);
        if(!$category){
            return response()->json([
                'error'=>'Produto não encontrado'
            ]);
        }

        $category->delete();

        return response()->json(null, 204);
    }
}
