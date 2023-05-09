<?php

namespace App\Http\Controllers\Produtos;

use App\Http\Controllers\Controller;
use App\Models\Fornecedor;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('administracao.produtos.listagem')->with('produtos', $produtos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fornecedores = Fornecedor::all();

        return view('administracao.produtos.criar')->with('fornecedores', $fornecedores);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produto::create($request->all());

        return redirect()->route('produto.index')->with('sucesso', 'Um novo produto foi adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = Produto::find($id);

        return view('administracao.produtos.visualizar')->with('produto', $produto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto = Produto::find($id);
        $fornecedores = Fornecedor::all();

        return view('administracao.produtos.editar')->with('produto', $produto)->with('fornecedores', $fornecedores);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Produto::query()->where('id', $id)->update($request->except('_token', '_method'));

        return redirect()->route('produto.edit', ['id' => $id])->with('sucesso', 'O produto foi atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produto::find($id)->delete();

        return redirect()->route('produto.index')->with('sucesso', 'Um produto foi deletado com sucesso!');
    }
}
