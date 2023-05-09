@extends('layouts.principal')

@section('content')
    <div class="container">
        <div class="content mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form class="formulario-cadastro">
                        <div class="mb-3">
                            <h1 class="titulo-pagina">Visualizar produto</h1>
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Código</label>
                            <input type="text" class="form-control" id="code" name="code" value="{{ $produto->code }}" disabled>
                          </div>
                          <div class="mb-3">
                              <label for="usuario" class="form-label">Descrição</label>
                              <input type="text" class="form-control" id="description" name="description" value="{{ $produto->description }}" disabled>
                          </div>
                          <div class="mb-3">
                              <label for="usuario" class="form-label">Estoque inicial</label>
                              <input type="text" class="form-control" id="stock_in" name="stock_in" value="{{ $produto->stock_in }}" disabled>
                          </div>
                          <div class="mb-3">
                              <label for="usuario" class="form-label">Estoque atual</label>
                              <input type="text" class="form-control" id="stock_out" name="stock_out" value="{{ $produto->stock_out }}" disabled>
                          </div>
                          <div class="mb-3">
                              <label for="usuario" class="form-label">Preço de compra</label>
                              <input type="text" class="form-control" id="price_in" name="price_in" value="R$ {{ number_format($produto->price_in, 2, ',', ' '); }}" disabled>
                          </div>
                          <div class="mb-3">
                              <label for="usuario" class="form-label">Preço de venda</label>
                              <input type="text" class="form-control" id="price_out" name="price_out" value="R$ {{ number_format($produto->price_out, 2, ',', ' '); }}" disabled>
                          </div>
                          <div class="mb-3">
                            <label for="usuario" class="form-label">Fornecedor</label>
                            <input type="text" class="form-control" id="price_out" name="price_out" value="{{ $produto->provider->name }}" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
