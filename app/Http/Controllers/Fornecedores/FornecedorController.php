<?php

namespace App\Http\Controllers\Fornecedores;

use App\Http\Controllers\Controller;
use App\Http\Requests\CriarFornecedorRequest;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fornecedores = Fornecedor::all();

        return view('administracao.fornecedores.listagem')->with('fornecedores', $fornecedores);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administracao.fornecedores.criar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CriarFornecedorRequest $request)
    {
        Fornecedor::create($request->all());

        return redirect()->route('fornecedor.index')->with('sucesso', 'Um novo fornecedor foi adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fornecedor = Fornecedor::find($id);

        return view('administracao.fornecedores.visualizar')->with('fornecedor', $fornecedor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fornecedor = Fornecedor::find($id);

        return view('administracao.fornecedores.editar')->with('fornecedor', $fornecedor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Fornecedor::query()->where('id', $id)->update($request->except('_token', '_method'));

        return redirect()->route('fornecedor.edit', ['id' => $id])->with('sucesso', 'O fornecedor foi atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Fornecedor::find($id)->delete();

        return redirect()->route('fornecedor.index')->with('sucesso', 'Um fornecedor foi deletado com sucesso!');
    }
}
