@extends('layouts.principal')

@section('content')
    <div class="container">
        <div class="content mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    @if(\Session::has('sucesso'))
                      <div class="alert alert-success" role="alert">
                        <strong>{{ \Session::get('sucesso') }}</strong>
                      </div>
                    @endif

                    <form class="formulario-cadastro" method="POST" action="{{ route('produto.update', ['id' => $produto->id]) }}">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <h1 class="titulo-pagina">Editar produto</h1>
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Código</label>
                            <input type="text" class="form-control" id="code" name="code" value="{{ $produto->code }}">
                          </div>
                          <div class="mb-3">
                              <label for="usuario" class="form-label">Descrição</label>
                              <input type="text" class="form-control" id="description" name="description" value="{{ $produto->description }}">
                          </div>
                          <div class="mb-3">
                              <label for="usuario" class="form-label">Estoque inicial</label>
                              <input type="text" class="form-control" id="stock_in" name="stock_in" value="{{ $produto->stock_in }}">
                          </div>
                          <div class="mb-3">
                              <label for="usuario" class="form-label">Estoque atual</label>
                              <input type="text" class="form-control" id="stock_out" name="stock_out" value="{{ $produto->stock_out }}">
                          </div>
                          <div class="mb-3">
                              <label for="usuario" class="form-label">Preço de compra</label>
                              <input type="text" class="form-control" id="price_in" name="price_in" value="{{ $produto->price_in }}">
                          </div>
                          <div class="mb-3">
                              <label for="usuario" class="form-label">Preço de venda</label>
                              <input type="text" class="form-control" id="price_out" name="price_out" value="{{ $produto->price_out }}">
                          </div>
                          <div class="mb-3">
                              <label for="usuario" class="form-label">Fornecedor</label>
                              <select class="form-control" id="provider_id" name="provider_id" required value="{{ $produto->provider_id }}">
                                  <option value="">Selecione um fornecedor</option>
                                  @foreach($fornecedores as $fornecedor)
                                      <option @if($produto->provider_id === $fornecedor->id) selected @endif value="{{ $fornecedor->id }}">{{ $fornecedor->name }}</option>
                                  @endforeach
                              </select>
                          </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
