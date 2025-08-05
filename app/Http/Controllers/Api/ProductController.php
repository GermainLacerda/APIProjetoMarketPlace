<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProdutoResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        // Apenas store, update e destroy exigem autenticação
        $this->middleware('auth:sanctum')->only(['store', 'update', 'destroy']);
    }
    public function index()
    {
        $produtos = Product::with('categoria')->get();
        return ProdutoResource::collection($produtos);
    }

    public function show($id)
    {
        $produto = Product::find($id);
        if (!$produto) {
            return response()->json(['error' => 'Produto não encontrado'], 404);
        }
        return $produto;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'categoria_id' => 'required|numeric',
            'imgLink' => 'nullable|url|max:255',
            'price' => 'required|numeric',
            'descricao' => 'nullable|string',
        ]);

        $produto = Product::create($validated);

        return response()->json($produto, 201);
    }

    public function update(Request $request, $id)
    {
        $produto = Product::find($id);
        if (!$produto) {
            return response()->json(['error' => 'Produto não encontrado'], 404);
        }

        $validated = $request->validate([
            'titulo' => 'sometimes|required|string|max:255',
            'categoria_id' => 'sometimes|required|numeric',
            'imgLink' => 'nullable|url|max:255',
            'price' => 'sometimes|required|numeric',
            'descricao' => 'nullable|string',
        ]);

        $produto->update($validated);

        return response()->json($produto);
    }

    public function destroy($id)
    {
        $produto = Product::find($id);
        if (!$produto) {
            return response()->json(['error' => 'Produto não encontrado'], 404);
        }

        $produto->delete();

        return response()->json(null, 204);
    }
}
