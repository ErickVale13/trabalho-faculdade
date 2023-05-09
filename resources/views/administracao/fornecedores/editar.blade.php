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

                    <form class="formulario-cadastro" method="POST" action="{{ route('fornecedor.update', ['id' => $fornecedor->id]) }}">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <h1 class="titulo-pagina">Editar fornecedor</h1>
                        </div>
                        <div class="mb-3">
                          <label for="usuario" class="form-label">Código</label>
                          <input type="text" class="form-control" id="code" name="code" value="{{ $fornecedor->code }}">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Nome do fornecedor</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $fornecedor->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">CNPJ</label>
                            <input type="text" class="form-control" id="document" name="document" value="{{ $fornecedor->document }}">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $fornecedor->phone }}">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $fornecedor->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ $fornecedor->address }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
