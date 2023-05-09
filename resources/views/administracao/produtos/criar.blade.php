@extends('layouts.principal')

@section('content')
    <div class="container">
        <div class="content mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form class="formulario-cadastro" method="POST" action="{{ route('produto.store') }}">
                        @csrf
                        <div class="mb-3">
                            <h1 class="titulo-pagina">Cadastrar produto</h1>
                        </div>
                        <div class="mb-3">
                          <label for="usuario" class="form-label">Código</label>
                          <input type="text" class="form-control" id="code" name="code">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Descrição</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Estoque inicial</label>
                            <input type="text" class="form-control" id="stock_in" name="stock_in">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Estoque atual</label>
                            <input type="text" class="form-control" id="stock_out" name="stock_out">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Preço de compra</label>
                            <input type="text" class="form-control" id="price_in" name="price_in">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Preço de venda</label>
                            <input type="text" class="form-control" id="price_out" name="price_out">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Fornecedor</label>
                            <select class="form-control" id="provider_id" name="provider_id" required>
                                <option value="">Selecione um fornecedor</option>
                                @foreach($fornecedores as $fornecedor)
                                    <option value="{{ $fornecedor->id }}">{{ $fornecedor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
